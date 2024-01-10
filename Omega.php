<php

include "Reloj.php";


class Omega extends Reloj{

    public function __construct(string $movimiento, string $hermeticidad, string $cristal, string $brazalete, string $corona, string $caja, string $esfera, int $peso){
        $this->movimiento = $movimiento;
        $this->hermeticidad = $hermeticidad;
        $this->cristal = $cristal;
        $this->brazalete = $brazalete;
        $this->corona = $corona;
        $this->caja = $caja;
        $this->esfera = $esfera;
        $this->peso = $peso;
    }

    public funtion __toString(){
        return "Este omega tiene cristal de " . $this->cristal;
    }


}





?>