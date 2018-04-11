<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ADMIN | เพิ่มข้อมูลสมาชิก</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="http://localhost/mbs/public/css/m/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="http://localhost/mbs/public/css/m/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="http://localhost/mbs/public/css/m/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="red">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://localhost/mbs/public/admin-home" class="simple-text">
                    ADMIN
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li> 
                        <a href="http://localhost/mbs/public/admin-home">
                            <i class="material-icons">dashboard</i>
                            <p>หน้าแรก</p>
                        </a>
                    </li>


                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">library_add</i>

                            <p>เพิ่มข้อมูล</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="active" >
                                <a href="http://localhost/mbs/public/admin-adduser">สมาชิก</a>
                            </li>
                            <li>
                                <a href="http://localhost/mbs/public/admin-addevent">งานนิทรรศการ</a>
                            </li>
                            <li >
                                <a href="http://localhost/mbs/public/admin-addzone">โซน-บูธ</a>
                            </li>
                        </ul>

                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">assessment</i>
                            <p>ตรวจสอบงานนิทรรศการ</p>
                        </a>
                       <ul class="dropdown-menu">

                            <li>
                                <a href="http://localhost/mbs/public/admin-event-status">งานนิทรรศการ</a>
                            </li>
                            <li >
                                <a href="http://localhost/mbs/public/admin-boothstatus">บูธ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">event</i>
                            <p>งานนิทรรศการ</p>
                        </a>
                       <ul class="dropdown-menu">

                            <li>
                                <a href="http://localhost/mbs/public/admin-booking">จองบูธ</a>
                            </li>
                        </ul>
                    </li>

                                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">person</i>
                            <p>สมาชิก</p>
                        </a>
                       <ul class="dropdown-menu">
                             <li >
                                <a href="http://localhost/mbs/public/admin-admin-status">ผู้ดูแลระบบ</a>
                            </li>
                            <li >
                                <a href="http://localhost/mbs/public/admin-user-status">สมาชิก</a>
                            </li>
                            <li>
                                <a href="http://localhost/mbs/public/admin-exhibitor-status">ผู้ประกอบการ</a>
                            </li>

                        </ul>
                    </li>
                      <li class="active-pro">
                        <a href="http://localhost/mbs/public/admin-contract">
                            <i class="material-icons">question_answer</i>

                            <p>ลูกค้าติดต่อ</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://localhost/mbs/public/admin-adduser"> เพิ่มข้อมูลสมาชิก</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
<!--                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li> -->

                            

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                 <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">แก้ไขโปรไฟล์</a>
                                    </li>
                                    <li>
                                <a href="http://localhost/mbs/public/logout" > 
                                    LOG OUT
                                  
                                </a>
                            </li>
                                    
                                </ul>
                            </li>
                                                       
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <!--<form action="http://localhost/mbs/public/admin-adduser" method="post">-->
                <?php 
                    if ($type == 'admin')
                    {
               
                    echo '<form action="http://localhost/mbs/public/admin-adduser" method="post">';
               
                    }
                    else if ($type == 'teacher')
                    {
                    echo '<form action="http://localhost/mbs/public/techer-adduser" method="post">';
                
                    }
                    else if ($type == 'student')
                    {
              
                    echo '<form action="http://localhost/mbs/public/student-adduser" method="post">';
                    }
                ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" data-background-color="red">
                                        <h4 class="title">เพิ่มข้อมูลสมาชิก</h4>
                                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                                    </div>
                                    <div class="card-content table-responsive">



                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>ชื่อ</label>
                                                    <input class="form-control" id="name" name="name">
                                                </div>
                                            </div>



                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>สกุล</label>
                                                    <input class="form-control" id="lname" name="lname">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>สถานะ</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="rad_status" id="rad_status" value="1">ผู้ดูแลระบบ
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="rad_status" id="rad_status" value="2">อาจารย์
                                                        <label class="radio-inline">
                                                            <input type="radio" name="rad_status" id="rad_status" value="3">นักศึกษา
                                                        </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div id="divStudentID" class="col-lg-6">
                                                <div class="form-group">
                                                    <label>รหัสนักศึกษา</label>
                                                    <input class="form-control" id="studentID" name="studentID">
                                                </div>
                                            </div>

                                            <!-- <div id="divMajor" class="col-lg-6" style="display:none;"> -->
                                            <div id="divMajor" class="col-lg-6">
                                                <div class="form-group">
                                                    <label>สาขา</label>

                                                    <div class="dropdown">
                                                        <select class="btn btn-default dropdown-toggle" name="major">

                                                            <option value="#">บัญชี</option>
                                                            <option value="#">การเงิน</option>
                                                            <option value="#">การตลาด</option>
                                                            <option value="#">การจัดการทรัพยากรมนุษย์</option>
                                                            <option value="#">ระบบสารสนเทศทางธุรกิจ</option>
                                                            <option value="#">การจัดการโลจิสติกส์</option>
                                                            <option value="#">การประชุมนิทรรศการ และการท่องเที่ยวเพื่อเป็นรางวัล</option>


                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div id="divLevel" class="col-lg-12" >
                                                <div class="form-group" >
                                                    <label>ชั้นปี</label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="lv" id="lv" value="1">1
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="lv" id="lv" value="2">2
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="lv" id="lv" value="3">3
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="lv" id="lv" value="4">4
                                                    </label>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>USERNAME</label>
                                                    <input class="form-control" type="username" id="password" name="username">
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>รหัสผ่าน</label>
                                                        <input class="form-control" type="password" id="password" name="password">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>เบอร์โทรศัพท์</label>
                                                    <input class="form-control" id="tel" name="tel">
                                                </div>
                                            </div>



                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" id="email" name="email">
                                                </div>
                                            </div>


                                        </div>


                                        <div class="row">
                                            <div id="divDepartment" class="col-lg-6">
                                                <div class="form-group">
                                                    <label>ฝ่าย</label>

                                                    <div class="dropdown">
                                                        <select class="btn btn-default dropdown-toggle" id="dep" name="dep">


                                                            <option value="1">Project Manager</option>
                                                            <option value="2">ประสานงาน</option>
                                                            <option value="3">ฝ่ายการเงิน</option>
                                                            <option value="4">ฝ่ายขาย</option>
                                                            <option value="5">PR</option>
                                                            <option value="6">CE</option>
                                                            <option value="7">Producer</option>
                                                            <option value="8">Design</option>

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>ตำแหน่ง</label>

                                                    <div class="dropdown">
                                                        <select class="btn btn-default dropdown-toggle" id="role" name="role">

                                                            <option>ADMIN</option>
                                                            <option>USER</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div id="divEvent" class="col-lg-12">
                                                <div class="form-group">
                                                    <label>งานนิทรรศการ</label>

                                                    <div class="dropdown">
                                                        <select class="btn btn-default dropdown-toggle" id="ev_name" name="ev_name">

                                                            <option>healthy & trendy fair สุขภาพดีไม่มีตกเทรนด์</option>
                                                            <option>Coffee & Bakery Fest">Coffee & Bakery Fest</option>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>





                                        <center>


                                            <button type='reset' name='reset' class='btn  btn-danger'>ยกเลิก</button>
                                            <button type='submit' name='submit' class='btn btn-success'>บันทึก</button>

                                        </center>



                                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" />

                    </form>


</body>
<!--   Core JS Files   -->
<script src="http://localhost/mbs/public/js/m/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="http://localhost/mbs/public/js/m/bootstrap.min.js" type="text/javascript"></script>
<script src="http://localhost/mbs/public/js/m/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="http://localhost/mbs/public/js/m/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="http://localhost/mbs/public/js/m/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="http://localhost/mbs/public/js/m/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="http://localhost/mbs/public/js/m/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="http://localhost/mbs/public/js/m/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="http://localhost/mbs/public/js/m/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        //popup
        $("input[type='radio'][name='rad_status']").change(function () {
            //alert("test rad");
            var selValue = $("input[name='rad_status']:checked").val();
            //alert(selValue);

            if (selValue == '1') {
                
                    
            }
            else {
                document.getElementById("divStudentID").style.display = "none";
                 document.getElementById("divMajor").style.display = "none";
                  document.getElementById("divLevel").style.display = "none";
                   document.getElementById("divDepartment").style.display = "none";
                    document.getElementById("divEvent").style.display = "none";


            }

            if (selValue == '2') {
                
                    document.getElementById("divEvent").style.display = "block";
            }
            else {
                document.getElementById("divStudentID").style.display = "none";
                 document.getElementById("divMajor").style.display = "none";
                  document.getElementById("divLevel").style.display = "none";
                   document.getElementById("divDepartment").style.display = "none";
                    document.getElementById("divEvent").style.display = "none";


            }


            if (selValue == '3') {
                document.getElementById("divStudentID").style.display = "block";
                 document.getElementById("divMajor").style.display = "block";
                  document.getElementById("divLevel").style.display = "block";
                   document.getElementById("divDepartment").style.display = "block";
                    document.getElementById("divEvent").style.display = "block";
            }


        });


    });
</script>

</html>