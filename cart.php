<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1> سلة المشتريات</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <span>سلة المشتريات</span>
    </h6>
</section>

<section class="mt-30 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    include 'controllers/cart-card.php';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mx-auto">
                <a href="payment-methods.php">
                    <button class="global-btn w-100 mt-20">اتمام الشراء</button>
                </a>
            </div>
        </div>
    </div>
</section>

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