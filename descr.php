<?php include("blocks/header.php");?>
<?php 
    $jsondata = file_get_contents("descr.json");
    $json = json_decode($jsondata,true);
    foreach($json["img"] as $m){

    }
?>
<?php include("blocks/footer.php");?>
