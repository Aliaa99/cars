<?php
    include 'controllers/header.php';
?>


<!-- <div class="skitter skitter-large with-dots">
  <ul>
    <li>
      <a href="#cut">
        <img src="https://visualhunt.com/photos/l/1/dawn-sun-mountain-landscape.jpg" class="cut" />
      </a>
      <div class="label_text">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          <a href="#see-more" class="btn btn-xs btn-warning">See more</a>
        </p>
      </div>
    </li>
    <li>
      <a href="#swapBlocks">
        <img src="https://visualhunt.com/photos/l/1/aurora-borealis-over-mountains-at-night.jpg" class="swapBlocks" />
      </a>
      <div class="label_text">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          <a href="#see-more" class="btn btn-xs btn-warning">See more</a>
        </p>
      </div>
    </li>
    
  </ul>
</div> -->



  <!-- Modal -->
  





<div class=" tele-academy-paging">
    <div class="container">

        <div class="owl-carousel owl-theme index-caro">

            <div class="item">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="pt-50 " >
                            <h2 class="animate__animated animate__tada">ابحث عن أفضل  منتج وسعر أقل</h2>
                            <p class="animate__animated animate__bounceInUp">هذا النص سيتغير هذا النص سيتغير هذا النص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/red_car.png" alt="" class="animate__animated animate__fadeInDownBig">
                    </div>
                </div>
            </div>
            
            <div class="item" >
                <div class="row">
                    <div class="col-sm-6">
                        <div class="pt-50 " >
                            <h2 class="animate__animated animate__tada">ابحث عن أفضل  </h2>
                            <p class="animate__animated animate__bounceInUp">هذا النص سيتغير هذا النص سيتغير هذا النص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/red_car.png" alt="" class="animate__animated animate__fadeInDownBig">
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
  


<div class="for-job">
    <div class="container">
        <div class="network text-center ">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="images/red_car.png" alt="">
                </div>
                <div class="item">
                    <img src="images/red_car.png" alt="">
                </div>
                <div class="item">
                    <img src="images/red_car.png" alt="">
                </div>
                <div class="item">
                    <img src="images/red_car.png" alt="">
                </div>
                <div class="item">
                    <img src="images/red_car.png" alt="">
                </div>
                <div class="item">
                    <img src="images/red_car.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- better-world -->
<div class="better-world ">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/red_car.png" alt="">                
            </div>
            <div class="col-sm-6">
                <h2>تأخذك وساطة إلى عالم أفضل وأسهل</h2>
                <p>هذا النص مثال يتغير هذا النص مثال يتغير هذا النص مثال يتغيرهذا النص مثال يتغيرهذا النص مثال يتغيرهذا النص مثال يتغير</p>
                <button class="btn btn-default global-btn mt-20">تسوق الان</button>
            </div>
        </div>
    </div>
</div>

    
 <!-- opinions -->
    <div class="opinions">
        <div class="container">
            <h2 class="text-center border-head mb-60">المنتجات الجديدة </h2>
            <div class="owl-carousel owl-theme ">
                <div class="item">
                    <?php
                        include 'controllers/product-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/product-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/product-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/product-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/product-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/product-card.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="back-ilustration">
        <div class="offers">
            <div class="container">
                <h2 class="text-center border-head mb-60">العروض المميزه </h2>
                <div class="owl-carousel owl-theme ">
                    <div class="item">
                        <?php
                            include 'controllers/horizontal-card.php';
                        ?>
                    </div>
                    <div class="item">
                        <?php
                            include 'controllers/horizontal-card.php';
                        ?>
                    </div>
                    <div class="item">
                        <?php
                            include 'controllers/horizontal-card.php';
                        ?>
                    </div>
                    <div class="item">
                        <?php
                            include 'controllers/horizontal-card.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'controllers/postal-post.php';
        ?>
    </div>


    <?php
        include 'controllers/footer.php';
    ?>




        <!-- Jquery js -->
        <script src="js/jquery-3.2.1.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!-- <script src="js/filoSlider.js"></script> -->
                
        <!-- <script src="js/slidr.js"></script> -->
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.skitter.min.js"></script>

        <script src="js/main.js"></script>

        <!-- <script>

            $('#slider').filoSlider({
            'slicesHorizontal' : 8,
            'slicesVertical' : 8,
            'timeout' : 2000,
            'fadeTimeout' : 5,
            'fadeTime' : 700,
            'navigation' :true
            });
        </script> -->
<script>
$('.skitter-large').skitter({
    navigation: true,
    dots: false
});

</script>
    </body>
</html>
