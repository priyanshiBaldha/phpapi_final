<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $bus_model = $_POST['bus_model'];
       
        

        $res = $config->add_bus_model($bus_model);

        if($res) {
            $arr['data'] = 'Model Added Successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Unable to add model';
        }
    } else {
        $arr['data'] = 'No other methods are allowed except POST...';
    }

    echo json_encode($arr);

?>