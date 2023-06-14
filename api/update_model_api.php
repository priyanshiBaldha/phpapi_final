<?php

    header('Access-Control-Allow-Methods: PUT, PATCH');
    header('Content-Type: application/json');

    include('../config/config.php');

    $config = new Config();

    if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH') {

        parse_str(file_get_contents('php://input'), $_r);

        $res = $config->update_model($_r['model_name']);

        if($res == 1) {
            $arr['data'] = 'Model updated successfully';
        } else {
            $arr['data'] = 'Model updation failed';
        }

    } else {
        $arr['data'] = 'use either PUT or PATCH request methods';
    }

    echo json_encode($arr);

?>