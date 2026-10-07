<?php
    /*
    * Inventario de un equipo del aula
    * Autor: escribe aquí tu nombre
    */
    define("AULA", "Aula 2.04");   
    $nombre_equipo   = "PC-07";
    $ip              = "192.168.20.107";
    $ram_gb          = 8;
    $disco_total_gb  = 512;
    $disco_usado_gb  = 384.5;
    $encendido       = true;
    $programas       = ["VS Code", "XAMPP", "Firefox"];
    $ultima_revision = null;
       
    $disco_libre_gb = $disco_total_gb - $disco_usado_gb;
    $porcentaje_uso = $disco_usado_gb * 100 / $disco_total_gb;
    $num_programas  = count($programas);
    


    echo "<pre>";
    echo "Equipo: " . $nombre_equipo . " (" . AULA . ")\n";
    echo "IP: $ip\n";
    echo "RAM: $ram_gb GB\n";
    echo "Disco libre: $disco_libre_gb GB\n";
    echo "Uso de disco: $porcentaje_uso %\n";
    echo "Programas instalados: $num_programas\n";
    echo "</pre>";
    
?>
