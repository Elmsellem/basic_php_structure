<?php
    
function redirect($loc) {
    header('Location: ' . $loc);
    die;
}

function responseJson($res) {
    header('Content-Type: application/json');
    echo json_encode($res);
    die;
}

function isPost() {
    return $_SERVER['REQUEST_METHOD'] === "POST";
}

function isGet() {
    return $_SERVER['REQUEST_METHOD'] === "GET";
}