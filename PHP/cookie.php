<?php
$quant_visitas = isset($_COOKIE['quant_visitas']) ? $_COOKIE['quant_visitas'] : 1;
setcookie("quant_visitas", $quant_visitas+1);
echo "Você visitou essa página " . $quant_visitas . " vez(es)";


?>