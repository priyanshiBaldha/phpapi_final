<?php

    header('Access-Control-Allow-Methods: GET');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $res = $config->fetch_ticket_Data();

        $ticket = [];

        while($record = mysqli_fetch_assoc($res)) {
            
            array_push($ticket, $record);
        }

        $arr['data'] = $ticket;

    } else {
        $arr['data'] = 'Only GET method is allowed'; 
    }

    echo json_encode($arr);

?>