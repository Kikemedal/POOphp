<php 

include "Reloj.php";
include "Omega.php";


$omega = new Omega("automático", "30atm", "zafiro", "acero inoxidable", "de rosca", "40mm", "azul", "450g" );

echo $omega->__toString();

?>