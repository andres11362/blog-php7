<?php
/**
 * Created by PhpStorm.
 * User: ANDRES
 * Date: 11/10/2017
 * Time: 16:49
 */

class Login
{

    private $con;
    public $email;
    public $password;

    public function __construct(Conexion $con)
    {
        $this->con = $con;
    }

    public function setEmail(string $email)
    {
        $this->email = $this->con->real_escape_string($email);
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public  function singIn()
    {
        $row = $this->getArrayQueryResult();

        if($this->isAffectedRows()){
            if($this->passwordVerify($row['password_dev'])){
                return $row;
            }
        }
        return false;
    }

    public function getArrayQueryResult()
    {
        $query = "SELECT * FROM usuario WHERE email_dev = '$this->email'";

        $res = $this->con->query($query);

        return $res->fetch_array(MYSQLI_ASSOC);
    }

    public function isAffectedRows():bool
    {
        return ($this->con->affected_rows > 0);
    }

    public function passwordVerify($password):bool
    {
        return (password_verify($this->password, $password));
    }

}