<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- Tab Title -->
        <title>Cars</title>
        <!-- Shortcut Icon -->
        <link rel="shortcut icon" href="images/logoicon.png" />
        <!-- Font Awesome Css -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="css/bootstrap-e.min.css" />
        <link rel="stylesheet" href="fonts/font/ar/stylesheet.css" />
        <link rel="stylesheet" href="fonts/icons/css/fontello.css" />

        <link rel="stylesheet" href="css/bootstrap-a.min.css" />
        <!-- Owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
        <!-- Lightbox -->
        <link rel="stylesheet" href="css/lightbox.css" />

        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
        <!-- Styling File -->
        <!-- <link rel="stylesheet" href="css/filoSlider.css" /> -->
<link href="css/skitter.css" type="text/css" media="all" rel="stylesheet" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

        
        <link rel="stylesheet" href="css/main.css" />


<script>
        window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            document.getElementById("mynav").style.backgroundColor = "#f1f7fe";
        } else {
            document.getElementById("mynav").style.backgroundColor = "transparent";
        }
    }

</script>
    </head>


    <header>
        <!-- navbar -->
        <nav class="navbar" id="mynav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="fa fa-bars"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo-2.png" alt="" width="75px" style="margin-top: 5px">
                    </a>
                </div>
                <div class="row">
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <div class="col-md-9 col-sm-10">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php" class="main-link">الرئيسية</a></li>
                                    <li><a href="who-we-are.php" class="main-link">من نحن</a></li>
                                    <li><a href="our-products.php" class="main-link">منتجاتنا</a></li>
                                    <li><a href="offers.php" class="main-link">العروض</a></li>
                                    <li><a href="order-now.php" class="main-link">اطلب الآن </a></li>
                                    <li><a href="contact-us.php" class="main-link">تواصل معنا</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-1 text-center mt-10">
                                <button type="button" class="opnmo" data-toggle="modal" data-target="#myModal">تسجيل</button>

                                <ul class="inline-block ">
                                    <div class="dropdown">
                                        <button class="btn  dropdown-toggle new-lang" type="button" data-toggle="dropdown">  
                                        <span class="caret color-white"></span><span class=" font-regular px-adjust">AR</span>
                                        </button>
                                        <ul class="dropdown-menu lang-menu">
                                            <li>
                                                <a href="#" class="newmemb2"> ar  </a>
                                            </li>
                                            <li>
                                                <a href="#"> en   </a>
                                            </li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                        </div>
                </div>

                </div>
                </div>

                </div>

            </div>
        </nav>    
    </header>



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
                                    <button type="submit" class="btn global-btn" data-dismiss="modal">دخول</button>
                                </form>

                                <p>ليس لديك حساب ؟ <a data-toggle="modal" href="#signup" class="new-account"> تسجيل جديد</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6 px-0">
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
                                    <button type="submit" class="global-btn" data-dismiss="modal">تسجيل</button>
                                </form>

                                <p> لديك حساب ؟ <a href="#" data-toggle="modal" class="login-btn"> تسجيل دخول</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6 px-0">
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
                                    <p class="color-gray">من فضلك ادخل البريد الإلكترونى الخاص بك وسوف يصلك كود لإنشاء كلمة المرور الجديده</p>
                                    <input type="email" class="form-control" placeholder="البريد الإلكترونى">
                                    <button type="button" data-toggle="modal" class="order-now global-btn" >اطلب الآن</button>
                                </form>

                                <p> هل تذكرت كلمة المرور ؟ <a href="#" data-toggle="modal" class="login-btn2"> تسجيل دخول</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6 px-0">
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
                                    <button type="submit" class="btn global-btn" data-dismiss="modal">ارسال</button>
                                </form>

                            </div>
                        </div>
                        <div class="col-sm-6 px-0">
                            <img src="images/image_send_cod.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <body>

        