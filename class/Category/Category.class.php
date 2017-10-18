<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 17/10/2017
 * Time: 18:52
 */

class Category
{

    private $con;
    public $name;

    public function __construct(Conexion $con)
    {
        $this->con = $con;
    }

    public function setName($name)
    {
       $this->name = $this->con->real_escape_string($name);
    }

    public function insert()
    {
        $query = "INSERT INTO categoria (categoria) VALUES ('$this->name')";

        if($this->con->query($query)){
           echo json_encode('Se inserto la categoria');
        }else{
            echo json_encode('Ha sucedido un error al insertar');
        }

    }


}