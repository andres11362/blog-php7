<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/blog/config/config.php';
    spl_autoload_register(function ($class){
        include '../../class/'.$class.'/'.$class.'.class.php';
    });


   if(isset($_POST['submit'])){

       $email       = $_POST['email'] ?? '' ;
       $password    = $_POST['password'] ?? '';

       if(empty($email) or empty($password)){
            header('location: login.php?message=Usuario o contraseña no ingresados&type=warningMessage');
       }
   }

   $login = new Login(new Conexion());

   $login->setEmail($email);
   $login->setPassword($password);
   $row = $login->singIn();

   if($row){
       $session = new Session();
       $session->addValue('email', $row['email_dev']);
       $session->addValue('id', $row['id_dev']);
       $session->addValue('usuario', $row['usuario_dev']);
       echo $session->getValue('email');
       header('location: ../dashboard.php');
   }else{
       header('location: login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
   }