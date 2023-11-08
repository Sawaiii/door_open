<?php
$doors = array(
    1 => false,
    2 => false,
    3 => false,
    4 => false,
    5 => false, 
    6 => false, 
    7 => false, 
    8 => false, 
    9 => false, 
    10 => false
);
    for ($i = 1; $i <= 100; $i++) { 
        foreach ($doors as $key => $value) {
            if ($key %$i==0) {
                $doors[$key] = !$doors[$key];
                }
                $convert = $value ? "true" :"false";
                echo "Теперь ключ (Дверь) = ". $key .  " Значение = ". $convert ."\n";
                echo "Циклов пройдено: ".$i ."\n";
            }
    }
?>