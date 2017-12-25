<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class App {
    //put your code here
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];
    
    public function __construct() {
        /*
         * @var $url
         * @type array
         * @return url parts
         */
        
        $url = isset($_GET['url'])?explode('/',rtrim($_GET['url'], '/')):null;
        
        if(isset($url[0]) && class_exists(ucfirst($url[0]).'Controller'))
        {
            $this->controller = ucfirst($url[0]).'Controller';
            unset($url[0]);
        } else 
        {
            unset($url[0]);
        }
        
        if(isset($url[1]) && method_exists($this->controller, $url[1]))
        {
            
            $this->action = $url[1];
            unset($url[1]);
        } else 
        {
            unset($url[1]);
        }
        $this->params = isset($url)?array_values($url):[];
        $controller = new $this->controller;
        
        $controller->{$this->action}($this->params);
        
        
        #new HomeController();
        #new User(new Database);
        #new Model(new Database());
    }
    
}
