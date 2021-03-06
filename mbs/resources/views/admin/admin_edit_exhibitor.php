<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ADMIN | หน้าแรก</title>
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
                    <li class="active"> 
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
                        <a class="navbar-brand" href="http://localhost/mbs/public/admin-home"> หน้าแรก</a>
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
                                               <form action="http://localhost/mbs/public/admin-update-exhibitor" method="post" >  

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header" data-background-color="red">
                                        <h4 class="title">เแก้ไขข้อมูลผู้ประกอบการ</h4>
                                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                                    </div>
                                    <div class="card-content table-responsive">
                                        <form role="form">
                                            <div class="entry-content">
                                                <div class="excerpt">

                                   <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">

                                                       <?php
                                                            echo "<input type='hidden' id='id' name='id' value='".$ex->id."'>";
                                                                echo "<label>ชื่อ</label>";
                                              echo "<input class='form-control' id='name' name='name'  value='".$ex->name."' required>";
                                                                ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">

                                     <?php
                                                        
                                                                echo "<label>นามสกุล</label>";
                                              echo "<input class='form-control' id='lname' name='lname'  value='".$ex->lname."' required>";
                                                                ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">

                                    <?php
                                                        
                                                                echo "<label>เบอร์โทรศัพท์</label>";
                                              echo "<input class='form-control' id='tel' name='tel'  value='".$ex->tel."' required>";
                                                                ?>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                                                        <?php
                                                        
                                                                echo "<label>Email</label>";
                                              echo "<input type='email' class='form-control' id='email' name='email'  value='".$ex->email."' required>";
                                                                ?>
                                </div>
                            </div>


                        </div>


                                                <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                           <?php
                                                        
                                                                echo "<label>USERNAME</label>";
                                              echo "<input  class='form-control' id='username' name='username'  value='".$ex->username."' required>";
                                                                ?>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                               <?php
                                                        
                                                                echo "<label>PASSWORD</label>";
                                              echo "<input  class='form-control' id='password' name='password'  value='".$ex->password."' required>";
                                                                ?>
                                </div>
                            </div>

                        </div>

                                                <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">

                                     <?php
                                                        
                                                                echo "<label>ชื่อบริษัท/ชื่อร้านค้า</label>";
                                              echo "<input  class='form-control' id='company' name='company'  value='".$ex->company."' required>";
                                                                ?>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
<label>ที่อยู่บริษัท/ที่อยู่อร้านค้า</label>
                                   
                                                        
                                                              <?php  
                                             echo "<textarea class='form-control' id='address' name='address'  required>";
                                                                        echo "$ex->address";
                                                                        echo "</textarea>";
                                                                        ?>
                                                                

                                </div>
                            </div>
                        </div>




                                        <div class="row">
                                            <div id="divEvent" class="col-lg-12">
                                                <?php
                                                echo "<div class='form-group'>";
                                                    echo "<label>งานนิทรรศการ</label>";


                                                    echo "<div class='dropdown'>";
                                                        echo "<select class='btn btn-default dropdown-toggle' id='is_enable' name='is_enable'>";
echo "<option value='n'>รออนุมัติ</option>";
echo "<option value='y'>อนุมัติ</option>";

                                                            
                                                        echo "</select>";

                                                    echo "</div>";
                                                    echo "</div>";
                                                
                                                    ?>

                                            </div>
                                        </div>

                                      
                                                <center>

                                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                                                    <input type='reset' name='reset' class='btn  btn-danger' value="ยกเลิก">
                                                    <input type='submit' name='submit' class='btn btn-success' value="บันทึก">
                                                </center>

                                               
                                            </div>
                                    </div>
                                    </form>
 
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