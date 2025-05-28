<?php
    include_once 'Locomotora.php';
    include_once 'Vagon.php';
    include_once 'VagonPasajeros.php';
    include_once 'VagonCarga.php';
    include_once 'Formacion.php';

    $locomotora = new Locomotora(188, 140);

    $vagon1 = new VagonPasajeros(2020, 20, 10, 15000, 30, 25, 50);
    $vagonCarga = new VagonCarga(2020, 20, 10, 15000, 100000, 55000);
    $vagon = new VagonPasajeros(2020, 20, 10, 15000, 50, 50, 50);

    $formacion = new Formacion($locomotora, 5);
    $formacion->incorporarVagonFormacion($vagon1);
    $formacion->incorporarVagonFormacion($vagonCarga);
    $formacion->incorporarVagonFormacion($vagon);

    //-------------------------------------------------------

    // 4. Incorporar 6 pasajeros
    $incorporacion6pasajeros = $formacion->incorporarPasajeroFormacion(6);
    echo "Resultado de incorporar 6 pasajeros: " . ($incorporacion6pasajeros ? "Éxito" : "No se pudo") . "\n";

    //-------------------------------------------------------

    // 5. Print de los 3 vagones
    echo $vagon1;
    echo $vagonCarga;
    echo $vagon;

    //-------------------------------------------------------

    // 6. Incorporar 14 pasajeros
    $incorporacion14pasajeros = $formacion->incorporarPasajeroFormacion(14);
    echo "Resultado de incorporar 14 pasajeros: " . ($incorporacion14pasajeros ? "Éxito" : "No se pudo") . "\n";

    //-------------------------------------------------------

    // 7. Print de la locomotora
    echo $locomotora;

    //-------------------------------------------------------

    // 8. Promedio de pasajeros por vagón
    echo "\nPromedio de pasajeros por vagón: " . $formacion->promedioPasajeroFormacion() . "\n";

    //-------------------------------------------------------

    // 9. Peso total de la formación
    echo "\nPeso total de la formación: " . $formacion->pesoFormacion() . "\n";

    //-------------------------------------------------------

    // 10. Print de los 3 vagones nuevamente
    echo $vagon1;
    echo $vagonCarga;
    echo $vagon;

    
?>