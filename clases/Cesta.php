<?php

class Cesta {
    private $productos = [];

    public function __construct() {
        
    }
    /**
     * Método que recibe un cod y comprueba si este código coincide con uno que ya este guardado en el array de producto.
     * En caso de que si exista se añade uno a sus unidades.
     * En caso negativo se inician sus unidadades a 1 y se llama al método de la clase DB obtieneProducto que devuelve si ese cod existe en ls Base de datos.
     */
    public function add_producto($cod) {
        if (key_exists($cod, $this->productos)) {
            $this->productos[$cod]['unidades'] ++;
        } else {
            $this->productos[$cod]['unidades'] = 1;
            $this->productos[$cod]['productos'] = DB::obtieneProducto($cod);
        }
    }
    /**
     * Método estatico que comprueba si existe la variable de sesion cesta .
     * Si existe cargamos los datos de la variable de sesion cesta con unserialize.
     * Si no existe creamos una nueva cesta.
     */
    public static function obtener_cesta() {
        //leo variable de sesion
        if (isset($_SESSION['cesta'])) {
            $cesta = unserialize($_SESSION['cesta']);
        } else {
            $cesta = new Cesta();
        }

        return $cesta;
    }
    /**
     * Método que utiliza serialize para almacenar los productos en la variable de sesion cesta.
     */
    public function guardar_cesta() {
        //leo variable de sesion
        $_SESSION['cesta'] = serialize($this);
    }
    /**
     * Método que deja el array de productos vacio.
     */
    public function vaciar_cesta() {
        $this->productos = [];
    }
    /**
     * Método que recibe un codigo si las unidades del producto son 1 se elimina de la sesion el producto.
     * En caso de que sea diferente de  1 se restara una unidad.
     */
    public function restaProducto($cod) {
        if ($this->productos[$cod]['unidades'] == 1) {
            unset($this->productos[$cod]);
        } else {
            $this->productos[$cod]['unidades'] --;
        }
    }
    /**
     * 
     * @return type
     */
    function getProductos() {
        return $this->productos;
    }

}
