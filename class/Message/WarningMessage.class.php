<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 11/10/2017
 * Time: 20:24
 */

class WarningMessage extends Message
{

    public function getMessage($mensaje)
    {
        $message = strip_tags($mensaje);

        return "<div class='alert alert-warning' role='alert'>$message</div>";
    }

}