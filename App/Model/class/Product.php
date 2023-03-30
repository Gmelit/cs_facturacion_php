<?php
class Product 
{
    private $ProductoId;
    private $codigoProducto;
    private $descripcion;
    private $precio;
    private $imagen;
    
    public function __construct($ProductoId, $codigoProducto, $descripcion, $precio, $imagen) {
    	$this->ProductoId = $ProductoId;
    	$this->codigoProducto = $codigoProducto;
    	$this->descripcion = $descripcion;
    	$this->precio = $precio;
    	$this->imagen = $imagen;
    
    }

    public function getProductoId() {
    	return $this->ProductoId;
    }

    /**
    * @param $ProductoId
    */
    public function setProductoId($ProductoId) {
    	$this->ProductoId = $ProductoId;
    }

    public function getCodigoProducto() {
    	return $this->codigoProducto;
    }

    /**
    * @param $codigoProducto
    */
    public function setCodigoProducto($codigoProducto) {
    	$this->codigoProducto = $codigoProducto;
    }

    public function getDescripcion() {
    	return $this->descripcion;
    }

    /**
    * @param $descripcion
    */
    public function setDescripcion($descripcion) {
    	$this->descripcion = $descripcion;
    }

    public function getPrecio() {
    	return $this->precio;
    }

    /**
    * @param $precio
    */
    public function setPrecio($precio) {
    	$this->precio = $precio;
    }

    public function getImagen() {
    	return $this->imagen;
    }

    /**
    * @param $imagen
    */
    public function setImagen($imagen) {
    	$this->imagen = $imagen;
    }

   

    
}
