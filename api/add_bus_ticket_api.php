<?php

    header('Access-Control-Allow-Methods: POST');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        $price = $_POST['price'];
        $time = $_POST['time'];
    
        

        $res = $config->add_bus_ticket($name,$from,$to,$price,$time);

        if($res) {
            $arr['data'] = 'Ticket Added Successfully';
            http_response_code(201);
        } else {
            $arr['data'] = 'Unable to add Ticket';
        }
    } else {
        $arr['data'] = 'No other methods are allowed except POST...';
    }

    echo json_encode($arr);

?>