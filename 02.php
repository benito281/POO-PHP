<?php

class Producto {

	public function __construct(protected string $nombre, public int $precio, public bool $disponible){
	}
	public function mostrarProducto() : void {
		echo "El producto es " . $this->nombre . " y su precio es de " . $this->precio;  
	}
	public function getObtenerNombre() : string {
		return $this->nombre;
	}
	public function setModificarNombre(string $nombre){
		$this->nombre = $nombre;
	}
}

//Instancia de clase
$producto = new Producto("Tablet", 200, true);

echo $producto->mostrarProducto();

$producto->setModificarNombre("PC Gamer");
echo "<br>";
echo "Nombre modificado ";
echo "<br>";
echo $producto->mostrarProducto();

?>