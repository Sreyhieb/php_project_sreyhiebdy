<?php
    require_once('database/database.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $isedit=updateFruit($_POST);
        if($isedit){
           header('Location: index.php?page=fruit');
        }
    }
