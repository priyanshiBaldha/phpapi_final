<?php

    header('Access-Control-Allow-Methods: PUT, PATCH');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH') {

        parse_str(file_get_contents('php://input'), $_r);

        $res = $config->update_route($_r['id'], $_r['bus_name'], $_r['from'],$_r['to']);

        if($res == 1) {
            $arr['data'] = 'Route updated successfully';
        } else {
            $arr['data'] = 'Route updation failed';
        }

    } else {
        $arr['data'] = 'use either PUT or PATCH request methods';
    }

    echo json_encode($arr);

?>