<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class Route {
    protected static $controller = 'HomeController';
    protected static $action = 'index';
    
    protected static $params = [];
    public static function setController($controller):string
    {
         if(file_exists('../app/controllers/'.$controller.'.php'))
        {
             self::$controller = $controller;
        }
        #unset($controller);
        return self::$controller;
    }
    
    public static function setAction($controller,$action):string
    {
        if(method_exists($controller, $action))
        {
            self::$action = $action;
            
        }
        return self::$action;
    }
    
    public static function setParam($arg): array
    {
        if(!empty($arg))
        {
            self::$params = array_values($arg);
        }
        return self::$params;
    }
}
