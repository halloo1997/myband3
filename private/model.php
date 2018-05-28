<?php

function make_connection() {
    $mysqli = new mysqli('localhost', 'root', 'root', '15982_db');
    if ($mysqli->connect_errno) {
        die('Connection error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_mailadresses(){
    $mysqli = make_connection();
    $query = "SELECT mailadres FROM nieuwsbrief";
    $stmt = $mysqli->prepare($query) or die ('Error preparing 1. ');
    $stmt->bind_result($mailadres) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error excuting 1.');
    $results = array();
    while ($stmt->fetch()) {
        $results[] = $mailadres;
    }
    return $results;
}