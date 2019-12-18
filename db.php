<?php
$dbhost = "localhost";
$dbname = "sport_shop";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$username,$password);

//database-дегы данныйларды кайтару
function get_all_platformas(){
    global $db;
    $singles = $db->query("SELECT * FROM main");
    return $singles;
}
//id бойынша тексеру
function get_category_by_id($id){
    global $db;
    $categories = $db->query("SELECT * FROM categories WHERE id=$id");
    foreach($categories as $category){
        return $category["category_name"];
    }
}