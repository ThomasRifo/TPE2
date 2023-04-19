<?php

class Pasajeros
{
    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;

    public function __construct($nombre, $apellido, $documento, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->telefono = $telefono;
    }
    public function __getNombre()
    {
        return $this->nombre;
    }

    public function __getApellido()
    {
        return $this->apellido;
    }

    public function __getDocumento()
    {
        return $this->documento;
    }

    public function __getTelefono()
    {
        return $this->telefono;
    }

    public function __setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function __setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function __setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /*public function __agregarPasajero($array, $pasajero)
    {
        $array[] = $pasajero;
    }*/

    public function __toString() {
        return "{$this->documento} - {$this->apellido} {$this->nombre} - {$this->telefono}\n";
        }
    
}
