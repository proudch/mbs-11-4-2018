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

                            <li  class="active">
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

                     <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="http://localhost/mbs/public/adCh-Ev1" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

                    <div class="row">

                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

                    <div class="row">

                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100 text-center">
                                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">ชื่องาน</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">ระยะเวลาการจอง:</h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="row">จำนวนบูธ</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">บูธที่ชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธที่รอชำระเงิน:</th>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">บูธว่าง:</th>
                                                <td></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-danger">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

                    <!-- /หน้าถัดไป -->
                    <center>
                        <div class="container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

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