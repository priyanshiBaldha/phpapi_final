<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $bus_name = $_POST['bus_name'];
        $from = $_POST['from'];
        $to = $_POST['to'];
    
        

        $res = $config->add_bus_route($bus_name,$from,$to);

        if($res) {
            $arr['data'] = 'Route Added Successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Unable to add Route';
        }
    } else {
        $arr['data'] = 'No other methods are allowed except POST...';
    }

    echo json_encode($arr);

?>