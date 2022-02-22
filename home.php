

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>


    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="CSS/style.css">
    
</head>
<body>
  
<!-- header section starts-->

<section class="header">

   <a href="home.php" class="logo">TravelTiara</a>

   <nav class="navbar">
       <a href="home.php">home</a>
       <a href="about.php">about</a>
       <a href="package.php">package</a>
       <a href="book.php">book</a>
       <a href="shop.php">shop</a>
   </nav>   

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends-->

<!--home section starts-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
        
        <div class="swiper-slide slide" style="background:url(images/s1.jpg) no-repeat">
           <div class="content">
             <span>dream, travel, explore</span>
             <h3>Never stop exploring</h3>
             <a href="package.php" class="btn">discover more</a>
           </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
           <div class="content">
             <span>dream, travel, explore</span>
             <h3>dicover new places</h3>
             <a href="package.php" class="btn">discover more</a>
           </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/swi.jpg) no-repeat">
           <div class="content">
             <span>dream, travel, explore</span>
             <h3>job fills your pocket, let adventure fill your soul</h3>
             <a href="package.php" class="btn">discover more</a>
           </div>
        </div>
           
        </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
    </div>
</section>    
<!--home section ends-->

<!--services section starts -->
<section class="services">

   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
       <div class="box">
           <img src="images/category-1.jpg" alt="">
           <h3>bungee jump</h3>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
       </div>

       <div class="box">
           <img src="images/category-2.jpg" alt="">
           <h3>sky dive</h3>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
       </div>

       <div class="box">
           <img src="images/category-3.jpg" alt="">
           <h3>kayaking</h3>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
       </div>

       <div class="box">
           <img src="images/category-4.jpg" alt="">
           <h3>tour guide</h3>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
       </div>
   </div>  
   
</section>   
<!-- services section ends-->




<!--home about section starts-->
<section class="home-about">

    <div class="image">

       <img src="images/a-image.jpg" alt="">

    </div>

    <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>


<!--home about section ends-->


<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/sk1.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/couple.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home shop section starts -->

<section class="home-shop">

   <h1 class="heading-title"> featured products</h1>
          
   <div class="box-container">
         <div class="box"> 
            <div class="image">
               <img src="images/product-1.jpg" alt="">
                 <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                    <h3>survival kits</h3>
                  <div class="price"> $5.00 - $25.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
            </div>
        </div>   

        <!--<div class="swiper-slide slide">-->
        <div class="box">
           <div class="image">
                <img src="images/product-2.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>   
            </div>
            <div class="content">
                    <h3>survival kits</h3>
                    <div class="price"> $5.00 - $25.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>
         </div>   

         <div class="box">
             <div class="image">
                    <img src="images/product-3.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
              </div>
            <div class="content">
                    <h3>survival kits</h3>
                    <div class="price"> $5.00 - $25.00 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

            </div> 
         </div>
    </div>
      

</section>    

<!-- home shop section ends -->

<!--home offer section starts-->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!--home offer section ends-->

<section class="newsletter">

    <div class="content">
        <h3>subscirbe now</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam ipsam repellat nostrum esse officiis unde quisquam corporis doloremque adipisci similique!</p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscirbe" class="btn">
        </form>
    </div>

</section>




<!--footer section starts-->
<section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      
      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>
     
      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-476-8890 </a>
        <a href="#"> <i class="fas fa-phone"></i> +122-469-6677 </a>
        <a href="#"> <i class="fas fa-envelope"></i> sonali@gmail.com </a>
        <a href="#"> <i class="fas fa-phone"></i> xyz, India - 400231</a>
      </div>

      <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
      </div>

    </div>
    
    <div class="credit"> created by <span>Sonali</span> | all rights reversed! </div>
    
</section>   
<!--footer section ends-->





<!--swiper js link-->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="js/script.js"></script>
</body>
</html>