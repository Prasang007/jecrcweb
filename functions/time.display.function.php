<?php

function monthName($timeStr) {


    $postTime = strtotime("$timeStr");

    $tDisplay = date("M", $postTime);

    return $tDisplay;
}

function dateNumeric($timeStr) {


    $postTime = strtotime("$timeStr");

    $tDisplay = date("d", $postTime);

    return $tDisplay;
}

function timeDisplay($timeStr) {


    $postTime = strtotime("$timeStr");

    $tDisplay = date("h:i a", $postTime);

    return $tDisplay;
}

function DisplayTime($timeStr) {

    $postTime = strtotime("$timeStr");

    $tDisplay = date("d M Y", $postTime);

    return $tDisplay;
}

?>