<?php
    include 'controllers/header.php';
?>

<section class="text-center pages-heading">
    <h1>اتصل بنا</h1><br>
    <h6>
        <a href="index.php">الرئيسيه</a>
        <span>/</span>
        <span>اتصل بنا</span>
    </h6>
</section>

<section class="mt-30">
    <div class="container">
        <h3 class="text-center border-head mb-60"><strong>اتصل بنا</strong> </h3>
        <section class="mb-60 mt-30">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img src="images/image_contat.png" class="max-width-70" alt="">
                </div>
                <div class="col-sm-6">
                    <form action="">
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="text" class="form-control" placeholder="اسم المستخدم">
                            </div>
                            <div class="col-xs-12 mt-20">
                                <input type="text" class="form-control" placeholder="رقم الجوال">
                            </div>
                            <div class="col-xs-12 mt-20">
                                <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                            </div>
                            <div class="col-xs-12 mt-20">
                                <textarea name="" id="" cols="10" rows="3" placeholder="نص الرساله"></textarea>
                            </div>
                            <div class="col-xs-12 mt-20">
                                <button class="btn btn-default global-btn" type="button">طلب</button>
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