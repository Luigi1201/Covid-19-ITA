<?php
    require_once "functions.php"; 
    $array_content=array();
    $array_content=insert();
    $json=json_encode($array_content);
    echo $json;
?>