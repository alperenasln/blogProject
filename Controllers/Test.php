<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Test extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        print_r($model->findAll());


    }
}
?>