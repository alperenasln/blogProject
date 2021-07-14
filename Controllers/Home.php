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
        $data = $postModel->orderBy('post_id', 'DESC')->paginate(3);
        $data2 = $postModel->orderBy('post_id', 'DESC')->limit(2)->get()->getResultArray();
        $publicUserModel = new PublicUserModel();
        $publicData = $publicUserModel->get()->getFirstRow();
        $data = [
            'data' => $data,
            'data2' => $data2,
            'publicData' => $publicData,
            'pager' => $postModel->pager

        ];

        echo view('home', $data);
        // echo view('search',$data);
    }

    public function search($post_id = null)
    {
        helper('form', 'url');
        $postModel = new PostModel();
        $data2 = $postModel->orderBy('post_id', 'DESC')->limit(2)->get()->getResultArray();
        $publicUserModel = new PublicUserModel();
        $publicData = $publicUserModel->get()->getFirstRow();
        $searchData = $this->request->getPost();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        $postModel = new PostModel();
        if ($search == '') {
            echo 'empty search error';
        } else {
            $resultdata = $postModel->select('*')
                ->orLike('header', $search)
                ->orLike('body', $search)
                ->orLike('category', $search)->findAll();

        }

        $data = [
            'search' => $search,
            'resultdata' => $resultdata,
            'data2' => $data2,
            'publicData' => $publicData,
            'pager' => $postModel->pager

        ];

        return view('search', $data);
    }
}
