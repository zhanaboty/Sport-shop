<?php
$dbhost = "localhost";
$dbname = "sport_shop";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$username,$password);

//for adding new element
if (isset($_POST['save'])){
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    // $id = $_POST['id_category'];
    $img = $_POST['img'];
    $db->query("INSERT INTO main (name, cost, size, color, img) VALUES ('$name','$cost','$size','$color', '$img')") or 
        die($db->error); 

    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";

    header("location: Catalog.php");
}
//for deleting element
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $db->query("DELETE FROM main WHERE id = $id") or die($db->error());

    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";
    
    header("location: Catalog.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $singles = $db->query("SELECT * FROM main WHERE id = $id") or die($db->error());
    if(count($singles)==1){
        $single = $db->fetch_array();
        $name = $single['name'];
        $cost = $single['cost'];
        $size = $single['size'];
        $color = $single['color'];
        $img = $single['img'];
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