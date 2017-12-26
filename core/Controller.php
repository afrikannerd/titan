<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class Controller {
    protected function model($model)
    {
        return new $model(new Database());
    }
    
    protected function view($view,$data = [])
    {
        
        require_once '../app/views/'.$view.'.php';
        
    }
    
}
