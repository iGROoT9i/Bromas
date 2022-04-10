<?php

$cantidad = $_POST['Cantidad'];

$data = json_decode(file_get_contents("http://api.icndb.com/jokes/random/$cantidad"));





foreach ($data->{'value'} as $val) {


        $frace = $val->{'joke'};
        print "<h1> $frace\n </h1>";
        print "<br>";
}
