<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 11/10/2017
 * Time: 20:59
 */

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function addValue($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function getValue($key)
    {
        if ($this->issetValue($key)) {
            return $_SESSION[$key];
        }else{
            return false;
        }
    }

    public function removeValue($key)
    {
        if ($this->issetValue($key)) {
            unset($_SESSION[$key]);
        }else{
            return false;
        }
    }

    public function issetValue($value)
    {
        return isset($_SESSION[$value]);
    }

    public function validateSession($key)
    {
        if(!$this->issetValue($key)){
           $this->destroySession();
           return false;
        }

        return true;
    }

    public function destroySession()
    {
        session_unset();
        session_destroy();
    }

}