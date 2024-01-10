<php 

abstract class Reloj {
    private $movimiento;
    private $hermeticidad;
    private $cristal;
    private $brazalete;
    private $corona;
    private $caja;
    private $esfera;
    private $peso;


    abstract protected function getMovimiento();
    abstract protected function getHermeticidad();
    abtract protected function getCristal();
    abstract protected function getBrazalete();
    abtract protected  function getCorona();
    abtract protected  function getCaja();
    abtract protected  function getEsfera();
    abtract protected  function getPeso();

    



}



?>