<!Doctype html>
<html>
    <head>
        <meta http-equiv="refresh" content="20" />
    </head>
    <body>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

$GLOBALS['database'] = array(
    'driver' => 'mysql',
    'host' => 'localhost',
    'dbname' => 'mvc',
    'user' => 'root',
    'password' => 'banter',
    'options' => [PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,],
);

require_once '../lib/autoload.php';

new App;

