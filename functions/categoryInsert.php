<?php
    if(!isset($_POST['category']))
    {
        exit('Hubo un error, no se agrego la categoria');
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
    spl_autoload_register(function ($class){
        include '../class/'.$class.'/'.$class.'.class.php';
    });

    $category = new Category(new Conexion());

    $category->setName($_POST['category']);

    if($category->insert()){
        return 'Se logro';
    }else{
        return 'false';
    }


