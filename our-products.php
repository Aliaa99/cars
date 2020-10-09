<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1>منتجاتنا</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <span>منتجاتنا</span>
    </h6>
</section>

<section class="mt-30 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 mb-20">
                <form action="" class="filter-products">
                    <h6><strong>تصفية المنتجات</strong></h6>
                    <input type="text" class="form-control mt-20 mb-30" placeholder="ابحث هنا">
                    <hr>
                    <div class="select mt-20 mb-30">
                        <h6><strong>ماركة السياره</strong></h6>
                        <select  class="form-control select-style" >
                            <option value="" selected disabled class="option form-control" >اختر ماركة السياره </option>
                            <option class="option form-control">2</option>
                            <option class="option form-control">3</option>
                            <option class="option form-control">4</option>
                        </select>
                    </div>
                    <div class="select mt-20 mb-30">
                        <h6><strong>نوع السياره</strong></h6>
                        <select  class="form-control select-style" >
                            <option value="" selected disabled class="option form-control" >اختر نوع السياره </option>
                            <option class="option form-control">2</option>
                            <option class="option form-control">3</option>
                            <option class="option form-control">4</option>
                        </select>
                    </div>
                    <div class="select mt-20 mb-30">
                        <h6><strong>سعة الموتور</strong></h6>
                        <select  class="form-control select-style" >
                            <option value="" selected disabled class="option form-control" >اختر سعة الموتور </option>
                            <option class="option form-control">2</option>
                            <option class="option form-control">3</option>
                            <option class="option form-control">4</option>
                        </select>
                    </div>
                    <div class="select mt-20 mb-30">
                        <h6><strong>الأقسام</strong></h6>
                        <select  class="form-control select-style" >
                            <option value="" selected disabled class="option form-control" >اختر الأقسام </option>
                            <option class="option form-control">2</option>
                            <option class="option form-control">3</option>
                            <option class="option form-control">4</option>
                        </select>
                    </div>
                    <div class="submit-btn mt-20 mb-30 text-center">
                        <button class="btn btn-default global-btn" style="width: 100%" type="button">بحث</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-8 col-md-9">
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