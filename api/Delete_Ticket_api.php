<?php

    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json");

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'DELETE') {

        $input = file_get_contents('php://input');

        parse_str($input, $_DELETE);

        $res = $config->delete_bus_ticket($_DELETE['id']);

        if($res == 1) {
            $arr['data'] = 'Ticket deleted successfully';
        } else {
            $arr['data'] = 'Unable to delete Ticket';
        }

    } else {
        $arr['data'] = 'No other methods are allowed except DELETE...'; 
    }

    echo json_encode($arr);

?>