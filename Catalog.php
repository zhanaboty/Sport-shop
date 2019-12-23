<?php require "blocks/header.php";?>
<div class="backgr">
<!-- <div class="category">
            <a href="Football">hjgfd</a>
            <a href="">kljhgf</a>
            <a href="">jkhgfd</a>
            <a href="">kljhgfd</a>
</div>        -->
        <div class="cont">
            <?php
                $singles = get_all_platformas();
                foreach($singles as $single) : ?>
                <?php $category = get_category_by_id($single["id_category"]);?>
                <div class="content">
                        <div class="all">
                                <div class="platforma">
                                        <a href=""><i class="fas fa-shopping-basket"></i></a>
                                        <a href="Product_list.php?id=<?php echo $single["id"]; ?>"><img src="<?php echo $single["img"]; ?>" alt="photo"></a>
                                        <p>Category:<?php echo $category; ?></p>
                                        <p>Name:<?php echo $single["name"]; ?></p>
                                        <p>Costs:<?php echo $single["cost"]; ?>$</p>
                                        <p>Sizes:<?php echo $single["size"]; ?></p>
                                        <p>Colors:<?php echo $single["color"]; ?></p>
                                        <button>Buy</button>
                                        <a href="Catalog.php?edit=<?php echo $single["id"]; ?>" class="edit">Edit</a>
                                        <a href="db.php?delete=<?php echo $single["id"]; ?>" class="delete">Delete</a>
                                </div>
                        </div>
                </div>
                <?php endforeach; ?>   
                <div class="form">
                        <form action="db.php" method="POST">
                                <label>Name</label><br>
                                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Name"><br>
                                <label>Cost</label><br>
                                <input type="text" name="cost" value="<?php echo $cost; ?>" placeholder="Enter the Cost"><br>
                                <label>Size</label><br>
                                <input type="text" name="size" value="<?php echo $size; ?>" placeholder="Enter Size"><br>
                                <label>Colors</label><br>
                                <input type="text" name="color" value="<?php echo $color; ?>" placeholder="Enter Colors"><br>
                                <label>Category ID</label><br>
                                <input type="text" name="id" placeholder="Enter Category ID"><br>
                                <label>Image</label><br>
                                <input type="text" name="img" value="<?php echo $img; ?>" placeholder="Add IMG url"><br>
                                
                                <?php 
                                if ($update == true):
                                ?>
                                <button type="submit" name="update">Update</button>
                                <?php else: ?>
                                        <button type="submit" name="save">Save</button>
                                <?php endif; ?>                                        
                        </form>
                </div> 
        </div>
            
<?php require "blocks/footer.php";?>
</div>