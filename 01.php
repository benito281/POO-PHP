<?php

class Producto {

    public function __construct(public string $nombre, public int $precio, public bool $disponible){
    }
    public function mostrarProducto(){
        echo "El producto es " . $this->nombre . " y su precio es de " . $this->precio;  
    }
}

//Instancia de clase
$producto = new Producto("Tablet", 200, true);
$producto->mostrarProducto();

echo  "<pre>";
var_dump($producto);
echo "<pre/>";

echo "<br>";


$producto2 = new Producto("Monitor Curvo Lenovo", 500, false);
$producto2->mostrarProducto();

echo  "<pre>";
var_dump($producto2);
echo "<pre/>";