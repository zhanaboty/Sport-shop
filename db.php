<?php
$dbhost = "localhost";
$dbname = "sport_shop";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$username,$password);


if (isset($_POST['save'])){
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    // $id = $_POST['id_category'];
    $img = $_POST['img'];
    $db->query("INSERT INTO main (name, cost, size, color, img) VALUES ('$name','$cost','$size','$color', '$img')") or 
        die($db->error); 
}
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



