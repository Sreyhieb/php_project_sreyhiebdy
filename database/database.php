<?php
    function db(){
        return new mysqli('localhost','root','','project_php');
    }
    //fruit
    function getAllFruit(){
        return db()->query("SELECT * FROM fruit ORDER BY fruit_id DESC ");
    }
    function createFruit($value,$image){
        $fruitname=$value['fruitname'];
        $price=$value['price'];
        $description=$value['description'];
        $user=1;
        $category=1;
        return db()->query("INSERT INTO fruit(fruitname,price,fruit_image,description,user_id,category_id) VALUES('$fruitname','$price','$image','$description','$user','$category')");
    }
    function getOneFruit($id){
        return db()->query("SELECT * FROM fruit WHERE fruit_id=$id");
    }
    function deleteFruit($id){
        return db()->query("DELETE FROM fruit WHERE fruit_id =$id");
    }
    function updateFruit($value){
        $fruitname=$value['fruitname'];
        $price=$value['price'];
        $description=$value['description'];
        $image=$value['fruit_image'];
        $id=$value['fruit_id'];
        return db()->query("UPDATE fruit SET fruitname='$fruitname',price='$price',description='$description', fruit_image='$image' WHERE fruit_id=$id");
    }
    //search
    function getAll(){
        return db()->query("SELECT * FROM fruit ORDER BY fruit_id DESC");
    }
    function getOne($id){
        return db()->query("SELECT * FROM fruit WHERE fruit_id=$id");
    }
    function seachByTitle($title){
        $name= $title['search'];
        return db()->query("SELECT * FROM fruit WHERE fruitname LIKE '%$name%'");
    }
    //login
    function getAllLogin(){

    }
    function getOneLogin($id){

    }
    //readmore
    function readmore($text,$number){
        return substr($text,0,$number);
    }