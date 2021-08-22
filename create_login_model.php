<?php
    require_once('database/database.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $iscreate= getAllLogin($_POST);
        if($iscreate){
           header('Location: index.php?page=login');
        }
    }


