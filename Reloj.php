<?php 

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
    abstract protected function getCristal();
    abstract protected function getBrazalete();
    abstract protected  function getCorona();
    abstract protected  function getCaja();
    abstract protected  function getEsfera();
    abstract protected  function getPeso();

    



}



?>