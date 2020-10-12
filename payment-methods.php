<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1>وسائل الدفع</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <a href="our-products.php">منتجاتنا</a>
        <span>/</span>
        <span>وسائل الدفع</span>
    </h6>
</section>

<section class="mt-30">
    <div class="container">
        <section class="mb-60 mt-30">
            <div class="row">
                <div class="col-sm-6">
                    <article>
                        <h3 class="mb-20"><strong>أدخل بياناتك الشخصيه هنا <br/> لاتمام عملية الشراء</strong></h3>
                    </article>
                    <img src="images/order_now_vector.png" class="max-width-70" alt="">
                </div>
                <div class="col-sm-6">
                    <form action="" class="mt-30">
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="text" class="form-control" placeholder="المدينه">
                            </div>
                            <div class="col-xs-12 mt-20">
                                <input type="text" class="form-control" placeholder="العنوان">
                            </div>
                            <div class="col-xs-12 mt-20">
                                <textarea name="" id="" cols="10" rows="3" placeholder="الكميه"></textarea>
                            </div>
                            <div class="col-xs-12 mt-20">
                                <input type="text" class="form-control" placeholder="رقم الهيكل">
                            </div>
                            <div class="col-xs-12 mt-20">
                                <button class="btn btn-default global-btn" type="button">طلب</button>
                            </div>
                        </div>                    
                    </form>
                </div>
            </div>
        </section>
        <!-- <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div> -->
    </div>
</section>
<section>
    <div class="container">
        <div class="row payment">
            <div class="col-sm-6 mx-auto text-center">
                <label>
                    <input type="radio" name="test" value="big">
                    <img src="images/credit_card.png" width="50px">
                </label>
                <label>
                    <input type="radio" name="test" value="small" checked>
                    <img src="images/wallet.png"  width="50px">
                </label>
            </div>
        </div>
    </div>
</section>
<!-- <section>
    <div class="container mb-60">
        <div class="row">
            <form action="" class="">
                <div class="col-sm-6 mt-20">
                    <input type="text" class="form-control" placeholder="اسم صاحب البطاقه">
                </div>
                <div class="col-sm-6 mt-20">
                    <input type="text" class="form-control" placeholder="تاريخ انتهاء البطاقه">
                </div>

                <div class="col-sm-6 mt-20">
                    <input type="text" class="form-control" placeholder="رقم البطاقه">
                </div>
                <div class="col-sm-6 mt-20">
                    <input type="text" class="form-control" placeholder="رقم الـ CVV">
                </div>
                <div class="col-xs-12 mt-20 text-center">
                    <button class="btn btn-default global-btn" type="button">اتمام</button>
                </div>
            </form>
        </div>
    </div>
</section> -->
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