<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $s_date = $_POST['s_date'];
        $e_date = $_POST['e_date'];
    
        

        $res = $config->add_bus_pass($name,$s_date,$e_date);

        if($res) {
            $arr['data'] = 'Pass Added Successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Unable to add Pass';
        }
    } else {
        $arr['data'] = 'No other methods are allowed except POST...';
    }

    echo json_encode($arr);

?>