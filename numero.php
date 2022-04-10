<?php

$num = $_POST['Numero'];
$data = json_decode(file_get_contents("http://api.icndb.com/jokes/$num"));

if($data->{'type'}=="NoSuchQuoteException"){

    print "<h1> Broma $num Eliminada. </h1>";

}else{

    foreach ($data->{'value'} as $clave => $valor) {

        if($clave == "joke"){
            print "<h1>Numero: $num\n </h1>";
            print "<h1> $valor\n </h1>";
    
        }
    }
}



