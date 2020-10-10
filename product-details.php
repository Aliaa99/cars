<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1>تفاصيل المنتج</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <a href="our-products.php">منتجاتنا</a>
        <span>/</span>
        <span>اسم المنتج</span>
    </h6>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            
            </div>
            <div class="col-md-4">
                <article>
                    <h3><strong>طلمبة بنزين</strong></h3>
                    <p>النص متيغير</p>
                </article>
                <hr>
                <h5 class="color-primary"><strong>السعر : 130 رس</strong></h5>
                <section class="details-card">
                    <h6 class="my-0"><strong>التفاصيل</strong></h6>
                    <p class="color-gray size-12 px-10 py-25 mt-20">تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج تفاصيل المنتج </p>
                </section>
                <a href="cart.php">
                    <button class="global-btn w-100 mt-20">أضف إلى السله</button>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="opinions">
    <div class="container">
        <h2 class="text-center border-head mb-60">منتجات مشابهه </h2>
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
        <script src="js/main.js"></script>
    </body>
</html>