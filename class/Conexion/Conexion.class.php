<?php

require '../config/config.php';

class Conexion extends MySqli
{

    private $host;
    private $username;
    private $passwd;
    private $dbname;

    public function __construct()
    {
        $this->host      = CONF_DB_HOST;
        $this->username  = CONF_DB_USER;
        $this->passwd    = CONF_DB_PASS;
        $this->dbname    = CONF_DB_DATABASE;

        parent::__construct($this->host, $this->username, $this->passwd, $this->dbname);
    }

    public function setCharset()
    {
        $this->set_charset(CONF_DB_CHARSET);
    }

}