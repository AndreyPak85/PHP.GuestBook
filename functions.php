<?php

function clear() {
    global $db;
    foreach($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
}

function saveMess() {
    global $db;
    clear();
    extract($_POST);
    $query = "INSERT INTO gb VALUES ('$name', '$text' )";
    mysqli_query($db, $query);
}

function getMess() {
    global $db;
    $query = "SELECT * FROM gb ORDER BY id DESC";
    mysqli_query($db, $query);
    return mysqli_fetch_all($db, MYSQLI_ASSOC);
}

function arrayPrint($mess) {
    echo "<pre>" . print_r($mess, true) . "</pre>";

