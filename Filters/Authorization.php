<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

    class Authorization implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null)
    {
        // TODO: Implement before() method.
        if(!session()->get('logged_in')){
            return redirect()->to('/login');
        }

    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // TODO: Implement after() method.
    }
    }
