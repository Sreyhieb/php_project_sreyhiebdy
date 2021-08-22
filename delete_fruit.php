<?php
    require_once('database/database.php');
    $fruitid=$_GET['fruitid'];
    $isdeletefruit=deleteFruit($fruitid);
    if($isdeletefruit){
        header('Location: index.php?page=fruit');
    }

