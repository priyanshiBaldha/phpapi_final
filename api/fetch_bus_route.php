<?php

    header('Access-Control-Allow-Methods: GET');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $res = $config->fetch_route_Data();

        $Route = [];

        while($record = mysqli_fetch_assoc($res)) {
            
            array_push($Route, $record);
        }

        $arr['data'] = $Route;

    } else {
        $arr['data'] = 'Only GET method is allowed'; 
    }

    echo json_encode($arr);

?>