<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1>اطلب الآن</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <span>اطلب الآن</span>
    </h6>
</section>

<section class="mt-30">
    <div class="container">
        <h3 class="text-center border-head mb-60"><strong>اطلب الآن</strong> </h3>
        <section class="mb-60 mt-30">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <article>
                        <h3 class="mb-20"><strong>اطلب جميع القطع المطلوبه من هنا</strong></h3>
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
                                <textarea name="" id="" cols="10" rows="3" placeholder="القطع المطلوبه"></textarea>
                            </div>
                            <div class="col-xs-12 mt-20">
                                <input type="text" class="form-control" placeholder="رقم الهيكل">
                            </div>
                            <div class="col-xs-12 mt-20">
                                <button class="btn btn-default global-btn" type="button">ارسال</button>
                            </div>
                        </div>                    
                    </form>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
    </div>
</section>



<?php
    include 'controllers/postal-post.php';
?>
<?php
    include 'controllers/footer.php';
?>