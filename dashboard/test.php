<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
    spl_autoload_register(function ($class){
        if($class === 'Conexion'){
            return include "../class/$class/$class.class.php";
        }
        include "../class/Article/$class.class.php";
    });

    $article = new Article(new Conexion());
    $cliente = new Client($article);

    writeIn($cliente->operateAction('insert'));
    writeIn($cliente->operateAction('select'));
    writeIn($cliente->operateAction('update'));
    writeIn($cliente->operateAction('delete'));

    function writeIn($value)
    {
        print("$value </br></br>");
    }