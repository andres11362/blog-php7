<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 17/10/2017
 * Time: 16:14
 */

class Client
{
    protected $article;
    protected $crud;
    protected $insert;
    protected $select;
    protected $update;
    protected $delete;

    public function __construct(Article $article)
    {
        echo "Iniciando clase cliente </br></br>";
        $this->article  =   $article;
        $this->insert   =   new InsertCommand($this->article);
        $this->select   =   new SelectCommand($this->article);
        $this->update   =   new UpdateCommand($this->article);
        $this->delete   =   new DeleteCommand($this->article);
        $this->crud     =   new Crud($this->insert, $this->select, $this->update, $this->delete);
    }

    public function operateAction($action)
    {
        switch ($action){
            case 'insert':
                echo "Peticion Insert </br>";
                return $this->crud->insert();
                break;
            case 'select':
                echo "Peticion Select </br>";
                return $this->crud->select();
                break;
            case 'update':
                echo "Peticion Update </br>";
                return $this->crud->update();
                break;
            case 'delete':
                echo "Peticion Delete </br>";
                return $this->crud->delete();
                break;
            default:
                throw new Exception("Error procesando la solicitud",1);
                break;
        }

    }


}