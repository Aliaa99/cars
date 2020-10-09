<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1>من نحن</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <span>من نحن</span>
    </h6>
</section>
<section class="mt-30">
    <div class="container px-0">
        <section class="mb-60">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="images/about_us_vector.png" class="max-width-70" alt="">
                </div>
                <div class="col-sm-6">
                    <article>
                        <h3><strong>جميع قطع الغيار أصليه مع الضمان</strong></h3>
                    </article>
                    <ul class="nav nav-pills main">
                        <li class="active"><a data-toggle="pill" href="#menu1">من نحن</a></li>
                        <li><a data-toggle="pill" href="#menu2">رؤية الشركه </a></li>
                        <li><a data-toggle="pill" href="#menu3">رسالة الشركه</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <div class="mt-20">
                                <p>رسالة الشركه رسالة الشركه رسالة الشركه رسالة الشركه رسالة الشركه رسالة الشركه رسالة الشركه رسالة الشركه رسالة الشركه رسالة الشركه </p>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="mt-20">
                                <p class="my-0">رؤية الشركه رؤية الشركه رؤية الشركه رؤية الشركه رؤية الشركه رؤية الشركه رؤية الشركه  </p>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="mt-20">
                                <p class="my-0">رسالة الشركه رسالة الشركه رسالة الشركهرسالة الشركهرسالة الشركه الشركهرسالة الشركه </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-60">
            <div class="container">
                <h3 class="text-center border-head"><strong>مميزات الشركه</strong> </h3>
                <div class="row mt-30">
                    <div class="col-sm-4 mt-30 mb-20">
                        <div class="card features text-center">
                            <section class="features__image">
                                <img src="images/calling.png" width="60px" alt="">
                            </section>
                            <article>
                                <h4><strong>24 / 7</strong></h4>
                                <p>تستطيع الوصول إلينا بسهوله  عبر الرقم الموحد 00000  بأسعار مناسبه أقل من سعر السوق</p>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-30 mb-20">
                        <div class="card features text-center">
                            <section class="features__image">
                                <img src="images/high_quality.png" width="60px" alt="">
                            </section>
                            <article>
                                <h4><strong>جوده عاليه</strong></h4>
                                <p>تستطيع الوصول إلينا بسهوله  عبر الرقم الموحد 00000  بأسعار مناسبه أقل من سعر السوق</p>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-30 mb-20">
                        <div class="card features text-center">
                            <section class="features__image">
                                <img src="images/more.png" width="60px" alt="">
                            </section>
                            <article>
                                <h4><strong>أكثر من 1000 قطعة غيار</strong></h4>
                                <p>تستطيع الوصول إلينا بسهوله  عبر الرقم الموحد 00000  بأسعار مناسبه أقل من سعر السوق</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include 'controllers/postal-post.php';
        ?>
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