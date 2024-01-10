<?php 

include "Omega.php";


$omega = new Omega("automático", "30atm", "zafiro", "acero inoxidable", 
                    "de rosca", "40mm", "azul", 450, "Seamaster 300", 7500.99);

echo $omega->__toString();

?>