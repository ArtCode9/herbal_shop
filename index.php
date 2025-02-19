<?php
       session_start();
       include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Herbal Shop</title>
   <link rel="stylesheet" href="style.css">
   <link rel="icon" href="src/logo.png">
</head>
<body>
      <div id="container">

            <div id="navbar">
                     <div id="navBox1">
                        <a href="#home">Home</a>
                        <a href="#news">Products</a>
                        <a href="#contact">Contact</a>
                        <a href="#about">About</a>
                        <div id="iconNavBox">
                           <div class="make-center">
                              <a href="cart.php">     
                              <img class="iconNav" src="src/shopcart.png" alt="shopcart">
                              </a>
                              <p>سبد خرید</p>
                           </div>

                           <div class="make-center">
                              <a href="login.php">
                              <img class="iconNav" src="src/profile.png" alt="">
                              </a>
                              <p>enter</p>
                              <p>
                                  hello  
<?php
      if(isset($_SESSION['username'])){
            $username= $_SESSION['username'];
            $query= mysqli_query($conn, "SELECT user.* FROM user WHERE user.username='$username'");
            while($row= mysqli_fetch_array($query)){
                  echo $row['username'];
            }
      }
?> 
                              </p>
                              <a href="logout.php">logout</a>
                           </div>


                        </div>
                     </div>
                     
                     <div id="navBox2">
                           <img src="src/logo.png" alt="herbal shop">
                     </div>
                     
                     <div id="navBox3">
                           <h1>Herbs Healing Your Pain</h1>
                     </div>

            </div>

            <div class="category">
                        <div class="categoryBox">
                              <img class="categoryImg" src="src/med1.png" alt="med">
                              <p>تنفسی</p>
                        </div>
                        <div class="categoryBox">
                              <img class="categoryImg" src="src/med2.png" alt="med">
                              <p>گوارشی</p>
                        </div>
                        <div class="categoryBox">
                              <img class="categoryImg" src="src/med3.png" alt="med">
                              <p>قلب</p>
                        </div>
                        <div class="categoryBox">
                              <img class="categoryImg" src="src/med4.png" alt="med">
                              <p>اعصاب</p>
                        </div>
                        <div class="categoryBox">
                              <img class="categoryImg" src="src/med5.png" alt="med">
                              <p>رژیمی</p>
                        </div>
                        <div class="categoryBox">
                              <img class="categoryImg" src="src/med6.png" alt="med">
                              <p>کودک</p>
                        </div>
            </div>

            <div class="slider">
                  <!-- Slideshow container -->
                  <div class="slideshow-container">

                  <!-- Full-width images with number and caption text -->
                  <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="src/slideImg1.png" style="width:100%;height:195px">
                  <div class="text">Caption Text</div>
                  </div>

                  <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="src/slideImg2.png" style="width:100%;height:195px">
                  <div class="text">Caption Two</div>
                  </div>

                  <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="src/slideImg3.jpeg" style="width:100%;height:195px">
                  <div class="text">Caption Three</div>
                  </div>

                  <div class="mySlides fade">
                  <div class="numbertext">3 / 4</div>
                  <img src="src/slideImg1.png" style="width:100%;height:195px">
                  <div class="text">Caption Four</div>
                  </div>

                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  </div>
                  <br>

                  <!-- The dots/circles -->
                  <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                  <span class="dot" onclick="currentSlide(4)"></span>
                  </div> 
            </div>            

            <div id="mainSection">
               <div class="cardShop">
                        <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
               <img class="cardImgShop" src="src/amino-zink.jpg" alt="amino-zink">
                        <h3>آمینو زینک</h3>
                        <p>فن آوران زرین گوهر</p>
                        
                        <div class="cardShopCart">
                              <img class="cardPlusShop" src="src/plus.png" alt="">
                            <div>
                              <h4>178000</h4>
                              <p>220000</p>
                            </div>
                        </div>
               </div>
               <div class="cardShop">
<!-- ============================================ -->
<button id="openPopup">Open Form</button>

<div class="overlay" id="overlay">
    <div class="popup">
        <span class="close" id="closePopup">&times;</span>
        <h2>Form Title</h2>
        <input type="text" placeholder="text1">
        <input type="text" placeholder="text2">
    </div>
</div>
<!-- ======================================================== -->
               </div>
            </div>

            <div class="footer">
                  
                   <div class="boxFoot">

                        <div id="logofoot">
                              <img src="src/logo.png" alt="Herbal shop">
                        </div>

                        <div id="fbox1">
                              <a class="aFoot" href="#">Home</a>
                              <a class="aFoot" href="#">About</a>
                              <a class="aFoot" href="#">Product</a>
                        </div>

                        <div id="fbox2">
                              <a class="aFoot" href="#">Herbs</a>
                              <a class="aFoot" href="#">Potion</a>
                              <a class="aFoot" href="#">Plants</a>
                              <a class="aFoot" href="#">Mix Herb</a>
                        </div>
                   </div>

                  <div class="copyFot">
                        <p>&copy;ArtCode</p>
                  </div>
            </div>

      </div>

          
      
<script src="active.js"></script>
<script src="active_pop.js"></script>



</body>
</html>
