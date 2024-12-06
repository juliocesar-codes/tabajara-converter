
<?php
function CtoF($temperature){
    $FTemperature = ($temperature*9/5) + 32;
    echo "<h2>{$temperature}ºC é equivalente a {$FTemperature}ºF</h2>";
}

function FtoC($temperature){
    $CTemperature = ($temperature - 32) * 5 / 9;
    echo "<h2>{$temperature}ºF é equivalente a {$CTemperature}ºC</h2>";
}