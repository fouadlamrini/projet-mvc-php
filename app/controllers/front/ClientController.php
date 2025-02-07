<?php
namespace App\Controllers\Front;
use App\Core\Controller;
class ClientController extends Controller{
    public function showClient(){
        $this->view('pageClient');
    }
}