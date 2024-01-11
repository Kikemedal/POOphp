
<?php 

include "Reloj.php";


class Seiko extends Reloj{

    private $modelo;
    private $precio;

    public function __construct(string $movimiento, string $hermeticidad, string $cristal, string $brazalete, string $corona, string $caja, string $esfera, int $peso, string $modelo, float $precio){
        $this->movimiento = $movimiento;
        $this->hermeticidad = $hermeticidad;
        $this->cristal = $cristal;
        $this->brazalete = $brazalete;
        $this->corona = $corona;
        $this->caja = $caja;
        $this->esfera = $esfera;
        $this->peso = $peso;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    
    public function getMovimiento(){
        return $this->movimiento;
    }
    public function getHermeticidad(){
        return $this->hermeticidad;
    }
    public function getCristal(){
        return $this->cristal;
    }
    public function getBrazalete(){
        return $this->brazalete;
    }
    public function getCorona(){
        return $this->corona;
    }
    public function getCaja(){
        return $this->caja;
    }
    public function getEsfera(){
        return $this->esfera;
    }
    public  function getPeso(){
        return $this->peso;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getPrecio(){
        return $this->precio;
    }

 

    public function __toString(){
        return "Este seiko tiene cristal  " . $this->getCristal() . " y es el modelo " . $this->getModelo() . ". Este reloj cuesta ". $this->getPrecio() . " €.";
    }

}



?>