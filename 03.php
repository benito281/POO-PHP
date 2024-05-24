<?php 
declare( strict_types = 1);

// Metodos estaticos
//Metodos estaticos : no utilizan la palabra reservada $this sino self

class Producto {

	// Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
	// protected - Se puede acceder / modificar unicamente en la clase
	// private solo miembros de la misma clase pueden acceder a el

	public $imagen;
	public static $imagenPlaceholder = "Imagen.jpg";
	public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
	{
		if($imagen){
			self::$imagenPlaceholder = $imagen;
		}
	}

	public function mostrarProducto() : void {
		echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
	}
	public static function obtenerImagenProducto(): string {
		return self::$imagenPlaceholder;
	}
	public function getNombre() : string {
		return $this->nombre;
	}

	public function setNombre(string $nombre) {
		$this->nombre = $nombre;
	}

}

//echo Producto::obtenerImagenProducto();
echo "\n";
$computadora = new Producto('Computadora', 200, true,'');

//echo $computadora->getNombre();
$computadora->setNombre('PC LG I5 10800G 500GBSSD 2TBHDD 16GB');
echo $computadora->mostrarProducto();
echo "\n";
echo $computadora->obtenerImagenProducto();
/* echo "<pre>";
var_dump($computadora);
echo "</pre>"; */

echo "\n";
$celular = new Producto('SAMSUNG GALAXY A14', 300, false, "Celular.jpg");
echo $celular->mostrarProducto();
echo "\n";
echo $celular->obtenerImagenProducto();
/* echo "<pre>";
var_dump($celular);
echo "</pre>";
 */

?>