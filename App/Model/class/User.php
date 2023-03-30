<?php
require ('Role.php');

class User extends Role
{
    private $idUsuario;
    private $nombre;
    private $usuario;
    private $correo;
    private $clave;
    private $RolId;
    private $fechaRegistro;
    

    

    function __construct($idUsuario, $nombre, $usuario, $correo, $clave, $RolId, $fechaRegistro) {
    	$this->idUsuario = $idUsuario;
    	$this->nombre = $nombre;
    	$this->usuario = $usuario;
    	$this->correo = $correo;
    	$this->clave = $clave;
    	$this->RolId = $RolId;
    	$this->fechaRegistro = $fechaRegistro;
    
    }

    public function getIdUsuario() {
    	return $this->idUsuario;
    }

    /**
    * @param $idUsuario
    */
    public function setIdUsuario($idUsuario) {
    	$this->idUsuario = $idUsuario;
    }

    public function getNombre() {
    	return $this->nombre;
    }

    /**
    * @param $nombre
    */
    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getUsuario() {
    	return $this->usuario;
    }

    /**
    * @param $usuario
    */
    public function setUsuario($usuario) {
    	$this->usuario = $usuario;
    }

    public function getCorreo() {
    	return $this->correo;
    }

    /**
    * @param $correo
    */
    public function setCorreo($correo) {
    	$this->correo = $correo;
    }

    public function getClave() {
    	return $this->clave;
    }

    /**
    * @param $clave
    */
    public function setClave($clave) {
    	$this->clave = $clave;
    }

    public function getRolId() {
    	return $this->RolId;
    }

    /**
    * @param $RolId
    */
    public function setRolId($RolId) {
    	$this->RolId = $RolId;
    }

    public function getFechaRegistro() {
    	return $this->fechaRegistro;
    }

    /**
    * @param $fechaRegistro
    */
    public function setFechaRegistro($fechaRegistro) {
    	$this->fechaRegistro = $fechaRegistro;
    }
}
