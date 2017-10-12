<?php
    spl_autoload_register(function ($class){
        include '../class/'.$class.'/'.$class.'.class.php';
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

   if($login->singIn()){
       echo 'credenciales validas';
   }else{
       header('location: login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
   }