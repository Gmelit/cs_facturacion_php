<?php

require('./App/config/connection.php');
require('./App/Model/class/User.php');

class UserModel
{
    private $connection;

    public function __construct()
    {
        $this->connection =  new Connection();
        $this->connection = $this->connection->connect();
    }

    public function save($UsuarioId,$nombres,$apellidos,$correo,$clave,$RolId,$fechaRegistro) {

    }
    public function getUser($user, $password)
    {
        $userObj = null;
        echo $user.' '.$password;
        echo "call `getUser`('{$user}', '{$password}')";
        /* find user */
        $results = $this->connection->query("call `getUser`('{$user}', '{$password}')");

        if ($results->num_rows === 0) {
            return null;
        }

        while ($obj = $results->fetch_object()) {

            //output results from database
            $userObj = new User(
                $obj->idusuario,
                $obj->nombre,
                $obj->usuario,
                $obj->correo,
                $obj->clave,
                $obj->idRol,
                $obj->fechaRegistro
            );
        }

        return $userObj;
    }
    public function getUsers()
    {

        /* retrive all users */
        $results = $this->connection->query("call `getUsers`()");

        if ($results->num_rows === 0) {
            return null;
        }

        while ($obj = $results->fetch_object()) {
            //output results from database
            $users[] = new User(
                $obj->UsuarioId,
                $obj->nombres,
                $obj->apellidos,
                $obj->correo,
                $obj->clave,
                $obj->RolId,
                $obj->fechaRegistro
            );
        }

        return $users;
    }
}
