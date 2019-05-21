<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author david
 */

class Producto {

    protected $codigo;
    protected $nombre;
    protected $nombre_corto;
    protected $PVP;

    public function getcodigo() {
        return $this->codigo;
    }

    public function getnombre() {
        return $this->nombre;
    }

    public function getnombrecorto() {
        return $this->nombre_corto;
    }

    public function getPVP() {
        return $this->PVP;
    }

    public function __construct($row) {
        $this->codigo = $row['cod'];
        $this->nombre = $row['nombre'];
        $this->nombre_corto = $row['nombre_corto'];
        $this->PVP = $row['PVP'];
    }

}

?>
