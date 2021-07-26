<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\PublicUserModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;

//defined('BASEPATH') OR exit('No direct scripts allowed');

class Home extends BaseController
{
    public function index()
    {
        $postModel = new PostModel();

        $search = $this->request->getGet('q');
        if($search)
        {
            $postModel = $postModel
                ->orLike('header', $search)
                ->orLike('body', $search)
                ->orLike('category', $search);
        }



        $data = $postModel->orderBy('post_id', 'DESC')->paginate(3);
        $data2 = $postModel->orderBy('post_id', 'DESC')->limit(2)->get()->getResultArray();
        $publicUserModel = new PublicUserModel();
        $publicData = $publicUserModel->get()->getFirstRow();
        $data = [
            'data' => $data,
            'data2' => $data2,
            'publicData' => $publicData,
            'pager' => $postModel->pager,


        ];

        echo view('home', $data);
        // echo view('search',$data);
    }


}
