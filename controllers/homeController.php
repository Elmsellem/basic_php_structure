<?php

if (!defined('START_UP')){
    throw new Exception("No direct access allowed");
}

require_once DIR_REQUESTS . DS . 'homeRequest.php';

function load_info($id) {
    // get data from db and return it
    return [];
}

function save_info($values) {
    global $db;
    if (validate_save_info($values)) {
        // save data in db
    }
    redirect(ADMIN_BASE_URL . "/sectionsControl.php");
}