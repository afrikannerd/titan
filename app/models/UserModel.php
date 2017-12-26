<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class UserModel extends Model{
    private $con= null;
    public $sql;
    public function __construct(\Database $db) {
        $this->con = $db;
        #$this->getInfo();
    }

    public function login()
    {
        $this->sql = $this->con->prepare('SELECT * from users where uid=1');
        $this->sql->execute();
        $this->sql->setFetchMode(PDO::FETCH_OBJ);
        
        
        return $this->sql->fetch();
        
    }
    
}
