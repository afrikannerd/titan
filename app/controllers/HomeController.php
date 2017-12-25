<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class HomeController extends Controller {
    /*
    public function __construct() {
        $data = $this->model("UserModel")->getInfo();
        
        $this->view("home/indexview", $data);
    }
     * 
     */
    
    public function index($data = [])
    {
        echo 'default controller default action called with parameters:';
        foreach ($data  as $key=>$value) {
            echo $key .' : '.$value.'<br>';
        }
    }
    
    public function profile($data = [])
    {
        echo "profile action called with parameters: ";
        foreach ($data  as $key=>$value) {
            echo $key .' : '.$value.'<br>';
        }
    }
}
