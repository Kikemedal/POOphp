<php

include "Reloj.php";


class Omega extends Reloj{

    public function __construct($movimiento, $hermeticidad, $cristal, $brazalete, $corona, $caja, $esfera, $peso){
        $this->movimiento = $movimiento;
        $this->hermeticidad = $hermeticidad;
        $this->cristal = $cristal;
        $this->brazalete = $brazalete;
        $this->corona = $corona;
        $this->caja = $caja;
        $this->esfera = $esfera;
        $this->peso = $peso;
    }

}





?>