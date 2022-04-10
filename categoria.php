<?php

$cat_seect = $_POST['Categoria'];

if ($cat_seect != "Categoria") {
    $data = json_decode(file_get_contents("http://api.icndb.com/jokes/random?limitTo=[$cat_seect]"));

    // print_r($data);

    // print "<br>";
    // print "<br>";

    // print $cat_seect;

    // print "<br>";

    // print "<br>";

    $mos = ucfirst($cat_seect);


    foreach ($data->{'value'} as $clave => $valor) {

        if ($clave == "joke") {
            print "<h1> $valor <strong>($mos)</strong></h1>";
        }
    }
} else {
    print "<h1>--Seleccione una categoria--</h1>";
}
