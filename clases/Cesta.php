<?php

class Cesta {

//
////
////    public static $productos_cesta;
//
//
//    public static $productos_cesta; //esto contiene Objetos de Productos
//    public static $precio_total; // almacenaremos el precio total de la cesta
//
////metodo que nos suma el precio de todos los objetos contenidos en el array productos_cesta
//
//    public function precio_total() {
//        $total;
//        foreach (Cesta::$productos_cesta as $objetoProducto) {
//            $total+= $objetoProducto->getPVP();
//        }
//        Cesta::$precio_total = $total;
//    }
//
////metodo que nos calcula la cantidad de cada producto
//    public function cantidad_de_un_producto() {
//        
//    }

    private $productos = [];

    public function __construct() {
        
    }

    public function add_producto($cod) {
        if (key_exists($cod, $this->productos)) {
            $this->productos[$cod]['unidades'] ++;
        } else {
            $this->productos[$cod]['unidades'] = 1;
            $this->productos[$cod]['productos'] = DB::getProducto($cod);
        }
    }

    public static function obtener_cesta() {
        //leo variable de sesion
        if (isset($_SESSION['cesta'])) {
            $cesta = unserialize($_SESSION['cesta']);
        } else {
            $cesta = new Cesta();
        }

        return $cesta;
    }

    public static function guardar_cesta() {
        //leo variable de sesion
        $_SESSION['cesta'] = serialize($this);
    }

}
