<?php require "blocks/header.php";?>
<?php $single = get_platforma_by_id($_GET["id"]); ?>
<?php $category = get_category_by_id($single["id_category"]);?>
<div class="backgr">
        <div class="category">
                <a href="Football">hjgfd</a>
                <a href="">kljhgf</a>
                <a href="">jkhgfd</a>
                <a href="">kljhgfd</a>
        </div> 
        <div class="cont">
                <div class="content">
                        <div class="all">
                                <div class="platforma1">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                        <div class="img_p"><img src="<?php echo $single["img"]; ?>" alt="photo"></div>
                                        <div class="list_p">
                                        <p>Category:<?php echo $category; ?></p>
                                        <p>Name:<?php echo $single["name"]; ?></p>
                                        <p>Costs:<?php echo $single["cost"]; ?>$</p>
                                        <p>Sizes:<?php echo $single["size"]; ?></p>
                                        <p>Colors:<?php echo $single["color"]; ?></p>
                                        <button>Buy</button>
                                        </div>
                                </div>
                        </div>
                </div>
            
        </div>
</div>     
<?php require "blocks/footer.php";?>
