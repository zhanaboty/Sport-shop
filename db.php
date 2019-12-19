<?php
$dbhost = "localhost";
$dbname = "sport_shop";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$username,$password);

//return information on database
function get_all_platformas(){
    global $db;
    $singles = $db->query("SELECT * FROM main");
    return $singles;
}
//check with ID
function get_category_by_id($id){
    global $db;
    $categories = $db->query("SELECT * FROM categories WHERE id=$id");
    foreach($categories as $category){
        return $category["category_name"];
    }
}



//return information on database by id
function get_platforma_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM main WHERE id=$id");
    foreach($singles as $single){
        return $single;
    }
}