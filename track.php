<?php

$lnt = rand(100,150);
$lat = rand(30,50);
$id = rand(0,1000);
$data['lnt'] = $lnt;
$data['lat'] = $lat;
$data['id'] = $id;

echo json_encode($data);

?>