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
    /*
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];
     * 
     */
    
    public function __construct() {
        /*
         * @var $url
         * @type array
         * @return url parts
         */
        
        $url = isset($_GET['url'])?explode('/',rtrim($_GET['url'], '/')):null;
        
        $controller = \Route::setController(ucfirst($url[0]).'Controller');
        
        unset($url[0]);
        
        $action = \Route::setAction($controller, $url[1]);
        
        unset($url[1]);
        
        $params = \Route::setParam($url);
        
        $control = new $controller;
        
        $control->{$action}($params);
        
        
        #new HomeController();
        #new User(new Database);
        #new Model(new Database());
    }
    
}
