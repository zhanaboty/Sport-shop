<?php include("blocks/header.php");?>
        <div class="parallax"><div class="overlay">
                <h1>WELCOME TO OUR WEBSITE</h1><br>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi <br>
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br>
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur <br>
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>
                    mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error <br>
                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                <br>
                <br>
                <br>
                <button>Read more</button>
                </div>
                <a href="#" class="topbutton"> <i class="fas fa-chevron-up"></i></a>
        </div>
        <div class="con">
        <div class="slideshow-container">
                <br><br>
                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/3.webp" style="width:100%">
                <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>

                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
        </div>
        </div>
<?php include("blocks/footer.php");?>