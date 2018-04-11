<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ADMIN | เพิ่มข้อมูลงานนิทรรศการ</title>
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


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">library_add</i>

                            <p>เพิ่มข้อมูล</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="http://localhost/mbs/public/admin-adduser">สมาชิก</a>
                            </li>
                            <li class="active">
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
                        <a class="navbar-brand" href="http://localhost/mbs/public/admin-addevent"> เพิ่มข้อมูลงานนิทรรศการ</a>
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



                    <!-- <form class="form" method="" action=""> -->
                        {{ Form::open(array('url' => '/admin-addevent','files'=>'true')) }}
                   <!--  <form action="http://localhost/mbs/public/admin-addevent" method="post"> -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" data-background-color="red">
                                        <h4 class="title">เพิ่มข้อมูลงานนิทรรศการ</h4>
                                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                                    </div>
                                    <div class="card-content table-responsive">
                                        <form role="form">
                                            <div class="entry-content">
                                                <div class="excerpt">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>ชื่องาน</label>
                                                                <input class="form-control" type="text" id="ev_name" name="ev_name" placeholder="กรุณาใส่ชื่องาน">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>คำบรรยาย</label>
                                                                <textarea class="form-control" rows="3" id="ev_caption" name="ev_caption"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>วันที่เริ่มงาน</label>
                                                            <input class="form-control" type="date" id="ev_dateS" name="ev_dateS">
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>วันสิ้นสุดงาน</label>
                                                        <input class="form-control" type="date" id="ev_dateF" name="ev_dateF">
                                                    </div>

                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-6 ">
                                                        <div class="form-group ">
                                                            <label>วันที่เริ่มจองบูธ</label>
                                                            <input class="form-control " type="date" id="ev_dateRS" name="ev_dateRS">
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <label>วันสิ้นสุดจองบูธ</label>
                                                        <input class="form-control " type="date" id="ev_dateRF" name="ev_dateRF">
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12">

       
              {{ Form::label('รูปภาพของแปลน') }}      
            {{ Form::file('plan',['id'=>'plan']) }}
          

                                                    </div>

                                                </div>

                                                  <div class="row">
                                                    <div class="col-lg-12">
              {{ Form::label('รูปภาพของงาน') }}   

            {{ Form::file('image',['id'=>'image']) }}


                                                </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-12 ">
              {{ Form::label('เอกสารประกอบการจอง') }}      
            {{ Form::file('document',['id'=>'document']) }}
                                                     

                                                    </div>

                                                </div>




                                                <center>


                                                    <button type='reset' name='reset' class='btn  btn-danger'>ยกเลิก</button>
                                                    <button type='submit' name='submit' class='btn btn-success'>บันทึก</button>

                                                </center>

                                                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" />
                                            </div>
                                    </div>
                                <!--  </form> -->
                                 {{ Form::close() }}
                                </div>
                            </div>
                        </div>



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

    });
</script>

</html>