<?php

//Interface
interface TransporteInterfaz {
	public function getInfo() : string;
	public function getRuedas() : int;
}

 class Transporte implements TransporteInterfaz {
	public function __construct(protected int $ruedas, protected int $capacidad){
	}

	public function getInfo() : string {
		return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
	}
	public function getRuedas() : int {
		return $this->ruedas;
	}
}

class Automovil extends Transporte implements TransporteInterfaz {
	public function __construct(protected int $ruedas, protected int $capacidad, protected string $color){
	}

	public function getInfo() : string {
		return "El Autovil tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas. Su color es ". $this->color;
	}
	public function getColor() : string {
		return "El color del Automovil es ". $this->color;
	}
}

echo "<pre>";
var_dump($auto = new Automovil(4, 5, "Rojo"));
var_dump($camion = new Transporte(6, 8));
echo "</pre>";

echo "<hr>";

echo $auto->getInfo();
echo "<br>\n";
echo $auto->getColor();
echo "<br>\n";
echo "<hr>";

echo $camion->getInfo();