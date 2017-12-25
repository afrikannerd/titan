<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class Model {
    
    public function __construct(\Database $db) {
        /*
        $dsn = "{$GLOBALS['database']['driver']}:host={$GLOBALS['database']['host']};dbname={$GLOBALS['database']['dbname']}";
        try {
            $this->link = new PDO($dsn, $GLOBALS['database']['user'], $GLOBALS['database']['password'],$GLOBALS['database']['options']);
            return $this->link;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
         * 
         */
         
         
        
    }
    
}
