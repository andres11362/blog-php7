<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
    spl_autoload_register(function ($class){
        include '../../class/'.$class.'/'.$class.'.class.php';
    });

    $session = new Session();

    if(!$session->validateSession('id')){
        header('location: login/login.php?message=Inicia sesion para continuar&type=warningMessage');
    }

    $session->destroySession();

    header('Location: login.php?message=¡Hasta pronto!&type=successMessage');


