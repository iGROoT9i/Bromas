<?php
$data = json_decode(file_get_contents("http://api.icndb.com/jokes/random"));

// print_r($data);

print "<br>";

foreach ($data->{'value'} as $clave => $valor) {

    if($clave == "joke"){
        print "<h1> $valor\n </h1>";

    }
}

