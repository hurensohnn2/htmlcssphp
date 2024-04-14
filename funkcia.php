<?php

function pocetFotiek($fotky) {
    $pocet = 0;
    foreach ($fotky as $fotka) {
        $pocet++;
    }
    return $pocet;
}


$fotky = array('fotka1.jpg', 'fotka2.jpg', 'fotka3.jpg');
echo pocetFotiek($fotky); 

?>
