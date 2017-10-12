<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 11/10/2017
 * Time: 20:27
 */

class MesssageFactory
{
    public static function createMessage($type)
    {
        switch ($type){
            case 'successMessage':
                return new SuccessMessage();
                break;
            case 'warningMessage':
                return new WarningMessage();
                break;
            default:
                return false;
                break;
        }
    }

}