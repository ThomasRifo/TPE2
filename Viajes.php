<?php


class Viajes
{
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros; //Colección de objetos pasajero
    private $responsable; //objeto ResponsableV

    public function __construct($codigo, $destino, $maxPasajeros, $responsable)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
        $this->responsable = $responsable;
        $this->pasajeros = array();
    }

    public function __getCodigo()
    {
        return $this->codigo;
    }
    public function __getDestino()
    {
        return $this->destino;
    }

    public function __getMaxPasajeros()
    {
        return $this->maxPasajeros;
    }

    public function __getPasajeros()
    {
        return $this->pasajeros;
    }

    public function __setPasajeros($listaPasajeros)
    {
        $this->pasajeros = $listaPasajeros;
    }

    public function __setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function __setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function __setMaxPasajeros($maximo)
    {
        $this->maxPasajeros = $maximo;
    }

    public function __capacidadLLena($array)
    {
        $capacidadLLena = false;
        if (count($array->pasajeros) >= $array->maxPasajeros) {
            $capacidadLLena = true;
        }
        return $capacidadLLena;
    }

    //Agrega al pasajero al array
    /* LO PASE A LA CLASE PASAJEROS
    public function __agregarPasajero($array, $documento, $nombre, $apellido){
                $pasajero = array(
                    "nombre" => $nombre,
                    "apellido" => $apellido,
                    "documento" => $documento
                );
                array_push($array->pasajeros, $pasajero);
    } 
    */

    //Elimina al pasajero indicado con el documento. 
    //Podría ser mas eficiente usar un foreach en vez de for al igual que en modificarPasajero. Revisar
    public function __eliminarPasajero($array, $documento)
    {
        $pasajeroExiste = false;
        $i = 0;
        while ($i < count($array->pasajeros)) {
            //if($array->pasajeros[$i]["documento"] == $documento){ FORMA ANTERIOR DE LA CONDICION
            if ($array->__existePasajero($documento)) {
                array_splice($array->pasajeros, $i, 1);
                $pasajeroExiste = true;
            }
            $i++;
        }
    }


    public function __existePasajero($documento)
    {
        $pasajeros = $this->pasajeros;
        $existePasajero = false;
        $i = 0;
        $cantidadPasajeros = count($this->pasajeros);
        while (!$existePasajero && $i < $cantidadPasajeros) {
            if ($pasajeros[$i]->__getDocumento() == $documento) {
                $existePasajero = true;
            } else {
                $i++;
            }
        }
        return $existePasajero;
    }

    public function __existeViaje($array, $codigo)
    {
        $encontrado = false;
        $i = 0;
        if (count($array) >= 1) {
            while ($i < count($array)) {
                if (array_key_exists($codigo, $array)) {
                    $encontrado = true;
                } else {
                    $i++;
                }
            }
        }
        $existeViaje = $encontrado;
        return $existeViaje;
    }
    //Modifica los datos del pasajero en caso de que exista, sino avisa que no existe tal pasajero.
    //Los echo podría ponerlos directamente en el case correspondiente. A EVALUAR
    public function __modificarPasajero($documento, $nuevoNombre, $nuevoApellido, $nuevoDocumento)
    {
        for ($i = 0; $i < count($this->pasajeros); $i++) {
            if ($this->pasajeros[$i]["documento"] == $documento) {
                $this->pasajeros[$i]["nombre"] = $nuevoNombre;
                $this->pasajeros[$i]["apellido"] = $nuevoApellido;
                $this->pasajeros[$i]["documento"] = $nuevoDocumento;
                break;
            }
        }
    }

    public function __toString()
    {
        $texto = '';
        foreach ($this->pasajeros as $pasajero) {
            $texto .= "{$pasajero['documento']} - {$pasajero['nombre']} {$pasajero['apellido']}\n";
        }

        return "Código: {$this->codigo}\nDestino: {$this->destino}\nMáx. Pasajeros: {$this->maxPasajeros}\nPasajeros:\n{$texto}";
    }
}
