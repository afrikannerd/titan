<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class UserController extends Controller{
    
    public function index($data = [])
    {
        echo __METHOD__.' is the default action when controller '.__CLASS__.' is called without explicity stated method and params';
    }
    public function login()
    {
        $data = $this->model("UserModel")->login();
        
        $this->view('user/loginview', $data);
    }
    
    public function error()
    {
        $this->view('errorview');
    }
}
