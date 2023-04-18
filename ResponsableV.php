<?php

class ResponsableV
{
    private $numEmpleado;
    private $licencia;
    private $nombre;
    private $apellido;

    public function __construct($numEmpleado, $licencia, $nombre, $apellido)
    {
        $this->numEmpleado = $numEmpleado;
        $this->licencia = $licencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNumEmpleado(){
        return $this->numEmpleado;
    }

    public function getLicencia(){
        return $this->licencia;
    }
    
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setLicencia($licencia){
        $this->licencia = $licencia;
    }

    public function setNumEmpleado($numEmpleado){
        $this->numEmpleado = $numEmpleado;
    }

    public function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
}