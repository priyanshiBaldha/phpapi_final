<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $age = $_POST['age'];
       
    
        

        $res = $config->add_bus_driver($name,$age);

        if($res) {
            $arr['data'] = 'Driver Added Successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Unable to add Driver';
        }
    } else {
        $arr['data'] = 'No other methods are allowed except POST...';
    }

    echo json_encode($arr);

?>