<?php

// Um welche Station handelt sich's:
$station = "hardersounds";

// Die Stations-Infos aus der API abfragen:
$json_station = file_get_contents("https://stream.quermix.eu/api/nowplaying/".$station);

$obj_station = json_decode($json_station);

$streamer_name = $obj_station->live->streamer_name;

if (empty($streamer_name)){
    echo "Playliste";
} else{
    echo $streamer_name;
}


?>
