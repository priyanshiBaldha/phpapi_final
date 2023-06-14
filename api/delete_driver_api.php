<?php

    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json");

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'DELETE') {

        $input = file_get_contents('php://input');

        parse_str($input, $_DELETE);

        $res = $config->delete_bus_driver($_DELETE['id']);

        if($res == 1) {
            $arr['data'] = 'Driver deleted successfully';
        } else {
            $arr['data'] = 'Unable to delete Driver';
        }

    } else {
        $arr['data'] = 'No other methods are allowed except DELETE...'; 
    }

    echo json_encode($arr);

?>