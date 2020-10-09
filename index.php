<?php
    include 'controllers/header.php';
?>



  <!-- Modal -->
<div class="modal auth fade" id="myModal" role="dialog" >

    <div class="modal-dialog">
    
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body login">
                <!-- login -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="global-form">
                            <form action="">
                                <h3 class="text-center">تسجيل الدخول</h3>
                                <input type="email" class="form-control" placeholder="البريد االكترونى">
                                <input type="password" class="form-control" placeholder="كلمة المرور">
                                <a href="#" class="forget-pass">هل نسيت كلمة السر ؟</a>
                                <button type="submit" class="btn " data-dismiss="modal">دخول</button>
                            </form>

                            <p>ليس لديك حساب ؟ <a data-toggle="modal" href="#signup" class="new-account"> حساب جديد؟</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/image_login.png" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-body signup none" >
                <!-- sigup -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="global-form">
                            <form action="">
                                <h3 class="text-center">تسجيل جديد</h3>
                                <input type="text" class="form-control" placeholder="الاسم">
                                <input type="email" class="form-control" placeholder="البريد االكترونى">
                                <input type="password" class="form-control" placeholder="كلمة المرور">
                                <button type="submit" data-dismiss="modal">تسجيل</button>
                            </form>

                            <p> لديك حساب ؟ <a data-toggle="modal" class="login-btn"> تسجيل دخول</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/image_login.png" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-body forgetpass none" >
                <!-- forgetpass -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="global-form">
                            <form action="">
                                <h3 class="text-center">استعادة كلمة المرور</h3>
                                <p>من فضلك ادخل البريد الإلكترونى</p>
                                <input type="email" class="form-control" placeholder="البريد الإلكترونى">
                                <button type="button" data-toggle="modal" class="order-now" >أطلب الآن</button>
                            </form>

                            <p> هل تذكرت كلمة المرور ؟ <a data-toggle="modal" class="login-btn2"> تسجيل دخول</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/image_forget_password.png" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-body passcode none" >
                <!-- code -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="global-form">
                            <form action="">
                                <h3 class="text-center">تغيير الكود</h3>
                                <p>  من فضلك ادخل الكود المرسل على البريد الإلكترونى لتغيير كلمة المرور</p>
                                <input type="text" class="form-control" placeholder="أدخل الكود">
                                <button type="submit" class="btn " data-dismiss="modal">ارسال</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/image_send_cod.png" alt="">
                    </div>
                </div>
            </div>
   
        </div>
    </div>
  </div>
  





<div class=" tele-academy-paging">
    <div class="container">
        <div class="row">

                <div class="owl-carousel owl-theme index-caro">

                    <div class="item">
                        <div class="col-sm-6">
                            <div class="pt-50 " >
                                <h2 class="animate__animated animate__backInDown">أبحق عن أفضل  منتج وسعر أقل</h2>
                                <p class="animate__animated animate__backInUp">هذا النص سيتغير هذا النص سيتغير هذا النص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/red_car.png" alt="" class="animate__animated animate__zoomIn">
                        </div>
                    </div>
                    
                    <div class="item" >
                        <div class="col-sm-6">
                            <div class="pt-50 " >
                                <h2 class="animate__animated animate__backInDown">أبحق عن أفضل  منتج وسعر أقل</h2>
                                <p class="animate__animated animate__backInUp">هذا النص سيتغير هذا النص سيتغير هذا النص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/blue_car.png" alt="" class="animate__animated animate__zoomIn">
                        </div>
                    </div>
                    <div class="item" >
                        <div class="col-sm-6">
                            <div class="pt-50 " >
                                <h2 class="animate__animated animate__backInDown">أبحق عن أفضل  منتج وسعر أقل</h2>
                                <p class="animate__animated animate__backInUp">هذا النص سيتغير هذا النص سيتغير هذا النص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير هذا انص سيتغير </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/blue_car.png" alt="" class="animate__animated animate__zoomIn">
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
                <button class="global-btn">تسوق الان</button>
            </div>
        </div>
    </div>
</div>

    
 <!-- opinions -->
    <div class="opinions">
        <div class="container">
            <h2 class="text-center border-head">المنتجات الجديدة </h2>
            <div class="owl-carousel owl-theme ">
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
                <div class="item">
                    <?php
                        include 'controllers/success-card.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

<!-- contactus -->
<div class="contact-us p-20">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-5" >
                <h4>تواصل معنا</h4>
                <ul>
                    <li>
                        <span class="icon-style"><i class="fa fa-map-marker"></i></span>
                        <div class="contacts">
                            <span>العنوان</span>
                            <p>السعودية ،الدمام</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon-style"><i class="fa fa-mobile"></i></span>
                        <div class="contacts">
                            <span>رقم الجوال</span>
                            <p>2554896454</p>
                        </div>
                    </li>
                    <li>
                        <span class="icon-style"><i class="fa fa-envelope"></i></span>
                        <div class="contacts">
                            <span>البريد الإلكترونى</span>
                            <p>ahmed@yahoo.com</p>
                            <p>AaAa@gmail.com</p>
                            <p>ali@yahoo.com</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-7">
                <div class="contact-form">
                    <form action="">
                        <h3 class="text-center">تواصل معنا</h3>
                        <div class="form-group">
                            <label for="">اسم المستخدم</label>
                            <input type="text" class="form-control" placeholder="اسم المستخدم">
                        </div>
                        <div class="form-group">
                            <label for="">البريد الإلكترونى </label>
                            <input type="email" class="form-control" placeholder="البريد الإلكترونى">
                        </div>
                        <div class="form-group">
                            <label for="">رقم الجوال</label>
                            <input type="number" class="form-control" placeholder="رقم الجوال">
                        </div>
                        <div class="form-group">
                            <label for="">عنوان التواصل</label>
                            <input type="text" class="form-control" placeholder="عنوان التواصل">
                        </div>
                        <div class="form-group">
                            <label for="">نص التواصل</label>
                            <textarea name="" id="" cols="10" rows="5" placeholder="نص التواصل"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





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
