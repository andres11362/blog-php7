<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 17/10/2017
 * Time: 15:53
 */

class Article
{

    private $con;


    public function __construct(Conexion $con)
    {
        $this->con = $con;
    }

    public function select()
    {
        return 'select';
    }

    public function insert()
    {
        return 'insert';
    }

    public function update()
    {
        return 'update';
    }

    public function delete()
    {
        return 'delete';
    }

}