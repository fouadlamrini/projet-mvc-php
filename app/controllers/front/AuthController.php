<?php
namespace App\Controllers\Front;
use App\Core\Controller;
class AuthController extends Controller{
    public function showSingnUp(){
        $this->view('signUp');
    }
    public function showlogin(){
        $this->view('login');
    }
}