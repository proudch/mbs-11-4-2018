<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/n/apple-icon.png">
    <link rel="icon" type="image/png" href="img/n/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Page - Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/n/bootstrap.min.css" rel="stylesheet" />
    <link href="css/n/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/n/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="http://localhost/mbs/public/index">
                    MBS
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/mbs/public/index">
                          <!--   <i class="now-ui-icons business_bank"></i> -->
                            <p>หน้าแรก</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/mbs/public/event">
                            <!-- <i class="now-ui-icons location_bookmark"></i> -->
                            <p>งานนิทรรศการ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/mbs/public/exhibitor">
                           <!--  <i class="now-ui-icons files_paper"></i> -->
                            <p>ผู้ประกอบการ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/mbs/public/contract">
                            <!-- <i class="now-ui-icons ui-2_chat-round"></i> -->
                            <p>ติดต่อเรา</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/mbs/public/regrister" class="btn btn-info">
                            สมัครสมาชิก
                        </a>
                    </li>

                    <!--login-->
                    <li class="nav-item">
                        <a href="http://localhost/mbs/public/login" class="btn btn-success">
                            เข้าสู่ระบบ
                        </a>


                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">

        <div class="container">
            <div class="col-md-8 content-center">
                <div class="card  card-plain">
                <!--     <form class="form" method="" action=""> -->

                        <form action="http://localhost/mbs/public/regrister" method="post" >  
                        <div class="header header-primary text-center">
<br>
                            <h1>SIGN UP</h1>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group form-group-no-border input-lg">

                                    <!-- <input type="text" class="form-control" placeholder="USERNAME"> -->
                                    <input class="form-control" id="name" name="name" placeholder="ชื่อ" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group form-group-no-border input-lg">

                                    <!-- <input type="text" class="form-control" placeholder="USERNAME"> -->
                                    <input class="form-control" id="lname" name="lname" placeholder="สกุล" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="input-group form-group-no-border input-lg">

                                    <input type="text" placeholder="เบอร์โทรศัพท์" class="form-control" id="tel" name="tel" required/>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="input-group form-group-no-border input-lg">

                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form-group-no-border input-lg">
                                    <input class="form-control" id="username" name="username" placeholder="Username" required/>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group form-group-no-border input-lg">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="input-group form-group-no-border input-lg">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required />
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form-group-no-border input-lg">

                                    <input class="form-control" id="company" name="company" placeholder="ชื่อบริษัท/ชื่อร้านค้า" required/>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form-group-no-border input-lg">

                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="ที่อยู่บริษัท/ร้านค้า" required /></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="footer text-center">
                            <!-- <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">SIGN UP</a> -->
                             <button type='submit' name='submit' class='btn btn-primary btn-round btn-lg btn-block'>SIGN UP</button>
                        </div>
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                    </form>


                </div>
            </div>
        </div>

    </div>
</body>
<!--   Core JS Files   -->
<script src="js/n/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/n/core/popper.min.js" type="text/javascript"></script>
<script src="js/n/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/n/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/n/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="js/n/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="js/n/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>