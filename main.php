<?php 

include "Omega.php";
//include "Seiko.php";



$omega = new Omega("automático", "30atm", "zafiro", "acero inoxidable", "de rosca", "40mm", "azul", 450, "Seamaster 300", 7500.99);

//$seiko = new Seiko("Solar", "20atm", "Hardlex", "acero inoxidable", "de rosca", "38mm", "negro", 250, "SNE 550 Proxpex", 550.99);

//echo $seiko->__toString();

echo $omega->__toString();


?>