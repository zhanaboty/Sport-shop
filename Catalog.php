<?php require "blocks/header.php";?>
        <div class="cont">
            <?php
                $singles = get_all_platformas();
                foreach($singles as $single) : ?>
                <?php $category = get_category_by_id($single["id_category"]);?>
                <div class="content">
                        <div class="all">
                                <div class="platforma">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                        <img src="<?php echo $single["img"]; ?>" alt="photo">
                                        <p>Category:<?php echo $category; ?></p>
                                        <p>Name:<?php echo $single["name"]; ?></p>
                                        <p>Costs:<?php echo $single["cost"]; ?>$</p>
                                        <p>Sizes:<?php echo $single["size"]; ?></p>
                                        <p>Colors:<?php echo $single["color"]; ?></p>
                                        <button>Buy</button>
                                </div>
                        </div>
                </div>
                <?php endforeach; ?>    
        </div>
            
<?php require "blocks/footer.php";?>
</div>