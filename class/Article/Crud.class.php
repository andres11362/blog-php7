<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 17/10/2017
 * Time: 16:04
 */

class Crud
{

    protected $insert;
    protected $select;
    protected $update;
    protected $delete;

    public function __construct(InsertCommand $insert, SelectCommand $select, UpdateCommand $update, DeleteCommand $delete)
    {
        echo 'Iniciando Crud</br></br>';
        $this->insert = $insert;
        $this->select = $select;
        $this->update = $update;
        $this->delete = $delete;
    }

    public function insert()
    {
        echo 'Crud->insert</br>';
        return $this->insert->exec();
    }

    public function select()
    {
        echo 'Crud->select</br>';
        return $this->select->exec();
    }

    public function update()
    {
        echo 'Crud->update</br>';
        return $this->update->exec();
    }

    public function delete()
    {
        echo 'Crud->delete</br>';
        return $this->delete->exec();
    }

}