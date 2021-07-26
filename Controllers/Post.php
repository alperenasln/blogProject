<?php namespace App\Controllers;

use App\Models\PostModel;
use App\Models\PublicUserModel;
use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\Model;

class Post extends Controller
{

    public function _remap($id){


       $postModel = new PostModel();
       $post =$postModel->find($id);


        $publicUserModel = new PublicUserModel();
        $publicData = $publicUserModel->get()->getFirstRow();

        $data = [
          'publicData' => $publicData,
          'data' => $post,

        ];

        return view('post',$data);
    }
}
