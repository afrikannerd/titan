<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class Database extends PDO{
    /*
     * 
     * @var $link
     * @access protected
     * stores database connection string
     */
    public  $link = null;
    private  $host = 'localhost';
    protected $db = 'mvc';
    protected $user = 'root';
    protected $pass = 'banter';
    protected $options = [PDO::ATTR_PERSISTENT => true,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
    
    
    public function __construct() {
        
        #set_exception_handler(array(__CLASS__,'exception_handler'));
        $dsn = "mysql: host=localhost;dbname={$this->db};port=3306";
        $this->link = parent::__construct($dsn, $this->user, $this->pass, $this->options);
        #restore_error_handler();
        
        return $this->link;
    }
    
    public function __destruct() {
        $this->link = null;
        echo 'DB Closed';
    }

    public function segregate()
    {
        echo 'hdhfdfc';
    }
    
}
