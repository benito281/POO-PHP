<?php
//Clases abstractas

//Se heredan pero no se instancian

abstract class Transporte {
	public function __construct(protected int $ruedas, protected int $capacidad){
	}

	public function getInfo() : string {
		return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
	}
	public function getRuedas() : int {
		return $this->ruedas;
	}
}


class Bicicleta extends Transporte {
	public function getInfo() : string {
		return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA";
	}
}

class Automovil extends Transporte {
	public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){
	}
	public function getTransmision() : string {
		return $this->transmision;
	}
}

/* $trasporte = new Transporte(4, 5);
echo $trasporte->getInfo(); <----Si se elimina el abstract de la clase se puede utilizar y se descomenta */

echo "<hr>\n";
$bicicleta = new Bicicleta(2, 1);
$automovil = new Automovil(4, 5, "Manual");

echo $bicicleta->getInfo();
echo "<br>\n";
echo "<hr>";
echo $automovil->getInfo();
echo "<br>\n";
echo "La trasnmision es: ".$automovil->getTransmision() ;
