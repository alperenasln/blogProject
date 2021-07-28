<?php namespace App\Controllers;
use App\Models\PublicUserModel;
use CodeIgniter\Controller;
use App\Models\PostModel;
use CodeIgniter\Model;

class Dashboard extends Controller{
    public function index(){
        $session = session();
        //echo"you are in dashboard,".$session->get('username');
        $postModel = new PostModel();
        $data = $postModel->orderBy('post_id','ASC')-> paginate(3);


        $data=[
            'data' => $data,
            'pager'=>$postModel->pager

        ];
        //$data['pagination_link'] = $postModel->pager;

        return view('dashboard',$data);
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    public function addEntry(){
        return view('addEntry');
    }
    public function addEntryValidation(){
        helper(['form','url']);
        $error = $this->validate(
            [
                'body' => 'required',
                'header'=>'required',
                'post_added_date'=>'required',
                'image'=>'uploaded[image]',
                'category'=>'required'
            ]
        );

        if(!$error){
            echo view('addEntry',['error' =>$this->validator]);
        }
        else{
            $postModel = new PostModel();
            $file = $this->request->getFile('image');
            $imageName = $file->getRandomName();
            $file->move('images/',$imageName);
            $postModel->save([
               'body' => $this->request->getVar('body'),
               'header'=>$this->request->getVar('header'),
               'post_added_date'=>$this->request->getVar('post_added_date'),
               'category'=>$this->request->getVar('category'),
               'image'=>$imageName
                ]);
            return $this->response->redirect(base_url("/dashboard"));
        }
    }
    public function editEntry($post_id=null){
    $postModel = new PostModel();
    $data = $postModel->where('post_id',$post_id)->first();
    $post_data = ['post_data'=>$data];

    return view('editEntry',$post_data);
    }
    public function editEntryValidation(){
        helper(['form','url']);
        $error = $this->validate(
            [
                'body' => 'required',
                'header'=>'required',
                'post_added_date'=>'required',
                //'image'=>'uploaded[image]',
                'category'=>'required'

            ]
        );
        $postModel = new PostModel();
        $post_id= $this->request->getVar('post_id');



        if(!$error){

            $data['data'] = $postModel->where('post_id',$post_id)->first();
            $data['error'] = $this->validator;
            echo view('editEntry',$data);
        }
        else{

            $file=$this->request->getFile('image');


            if($file->isValid()) {
                $imageName = $file->getRandomName();
                $file->move('images/', $imageName);
            }

            $data = [
                'body'=>$this->request->getVar('body'),
                'header' =>$this->request->getVar('header'),
                'post_added_date'=>$this->request->getVar('post_added_date'),
                'category'=>$this->request->getVar('category'),
            ];

            if(isset($imageName))
                $data['image'] = $imageName;


            $postModel->update($post_id,$data);
            return $this->response->redirect(base_url('/dashboard'));
        }
    }
    public function deleteEntry($post_id){
        $postModel = new PostModel();
        $postModel->where('post_id',$post_id)->delete($post_id);
        return $this->response->redirect(base_url('/dashboard'));
    }
    public function editMe()
    {
        $publicUserModel = new PublicUserModel();

        $publicData = $publicUserModel->get()->getFirstRow();
        $data = [
            'public_user_data' => $publicData,
        ];
        if ($this->request->getMethod()==='post') {
            $id = $this->request->getPost('id');

            $data = [
            'name' => $this->request->getPost('name'),
            'slogan' => $this->request->getPost('slogan'),
            'email' => $this->request->getPost('email'),
            'profile_photo' => $this->request->getPost('profile_photo')
            ];


            //$publicData = $publicUserModel->where('id',$id)->first();





            $publicUserModel->update($id, $data);
            return redirect()->to(base_url('/dashboard'));
        }
        //$data['pagination_link'] = $postModel->pager;
        return view('editMe',$data);
    }

}
