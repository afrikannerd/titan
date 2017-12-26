<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function LoadFile($file)
{
    $file = $file.'.php';
    $root = explode('/',$_SERVER['DOCUMENT_ROOT']);
    #define('PATH', strtolower($root[max(array_keys($root))]));
    @define('DS','/');

    $dir = array('app' => array(
        '','controllers','models','views'
    ),'core','lib',);
   /* 
    $format = array(
        '%s.php',
        '%s.class.php',
        '%s.core.php',
        '%s.inc.php'
    );
    * 
    */
    try{
    foreach ($dir as $key => $value) {
        foreach($value as $newdir) {
        $files = new RecursiveDirectoryIterator('..'.DS.$newdir);
        $files->setFlags(FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS);
        $files = new RecursiveIteratorIterator($files,RecursiveIteratorIterator::LEAVES_ONLY );

        foreach ($files as $key => $val) {
            if($val->isFile()){

            if ($val->getExtension() == 'php') {

                if($val->getFilename() === $file){

                    require_once $val->getPathname();
                    return true;
                }
            }}}}}
    }
    catch(\Exception $e)
    {
        
    }

        }

spl_autoload_register('LoadFile');