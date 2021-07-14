<?php namespace App\Models;
use CodeIgniter\Model;

class PublicUserModel extends Model{
    protected $table='user_info';
    protected $allowedFields = ['id','name','slogan','email','profile_photo'];
}