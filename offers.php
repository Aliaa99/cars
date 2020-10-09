<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1> العروض المميزه</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <span>العروض</span>
    </h6>
</section>

<section class="mt-30 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    include 'controllers/horizontal-card.php';
                ?>
                <?php
                    include 'controllers/horizontal-card.php';
                ?>
                <?php
                    include 'controllers/horizontal-card.php';
                ?>
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