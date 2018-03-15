<?php
error_reporting (E_ALL);

if(version_compare(phpversion(),'5.1.0','<')==true)
{die('PHP5.1 Only');}

define('DIRSEP',DIRECTORY_SEPARATOR);

$site_path=realpath(dirname(__FILE__).DIRSEP.'..'.DIRSEP).DIRSEP;

define('site_path',$site_path);

$db = new PDO('mysql:host=localhost;dbname=demo','[user]','[password]');

$registry->set('db',$db);

$router = new Router($registry);

$registry->set('router',$router);

$router->setPath (site_path.'controllers');

function delegate(){

    $this->getController($file,$controller,$action,$args);

    private function getController(&$file,&$controller,&$action,&$args){

        $route=(empty($_GET['route'])) ?":$_GET['route']";

        if(empty($route)){$route='index';
        }
        $route trim($route,'/\\');

        $parts = explode('/',$route);

        $cmd_path=$this->path;

        foreach ($parts as $part){

         $fullpath = $cmd_path . $part;
        }

        if(is_dir($fullpath)){
            $cmd_path = $path . DIRSEP;

            array_shift($parts);

            continue;
        }

        if(is_file($fullpath.'php')){

            $controller = $part;

            array_shift($parts);

            break;
        }

    }

    if(empty($controller)){$controller = 'index';};

    $action = array_shift($parts);

    if(empty($action)){$action = 'index';}

    $file = $cmd_path . $controller . 'php';

    $args = $parts;
}

function delegate(){

    $this->getController(file,$controller,$action,$args);

    if(is_readable($file)==false){

        die('404 Not Found');
    }
    include ($file);

    $class = 'Contriller_'.$controller;

    $controller = new $class($this->registry);

    if(is_callable(array($controller,$action))==false){

        die('404 not found');
    }
    $controller->action();
}
$router->delegate();

 ?>
