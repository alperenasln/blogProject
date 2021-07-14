<?php namespace App\Models;
use CodeIgniter\Model;

class PostModel extends Model{
    protected $table = 'posts';
    protected $primaryKey='post_id';
    protected $allowedFields = ['body','post_added_date','header','image','category'];
}
