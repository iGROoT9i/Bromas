<?php


$porciones = explode(" ", $_POST['Nombre']);
$porciones2 = explode(" ", $_POST['Apellido']);


$nom=$porciones[0];
$ape=$porciones2[0];

$data = json_decode(file_get_contents("http://api.icndb.com/jokes/random?firstName=$nom&lastName=$ape"));

foreach ($data->{'value'} as $clave => $valor) {

    if($clave == "joke"){
        print "<h1> $valor\n </h1>";

    }
}


