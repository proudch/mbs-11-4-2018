<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> MEMBER | ตรวจสอบสถานะการทำงาน- ชำระเงินแล้ว</title>
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
        <div class="sidebar" data-color="green" data-image="img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://localhost/mbs/public/member-home" class="simple-text">
                    MEMBER
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li >
                        <a href="http://localhost/mbs/public/member-home">
                            <i class="material-icons">dashboard</i>
                            <p>หน้าแรก</p>
                        </a>
                    </li>


                    <li class="active">
                        <a href="http://localhost/mbs/public/member-check">
                           <i class="material-icons">assessment</i>
                            <p>ตรวจสอบสถานะการทำงาน</p>
                        </a>
                    </li>


                    <li class="active-pro">
                        <a href="http://localhost/mbs/public/member-contract">
                            <i class="material-icons">question_answer</i>

                            <p>ติดต่อผู้ดูแลระบบ</p>
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
            </nav>

            <div class="content">
                <div class="container-fluid">
           <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <h4 class="title">ชำระเงินแล้ว</h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                 <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ลำดับ</th>
                                            <th>บูธ</th>
                                            <th>ขนาด</th>
                                           
                                            <th>สถานะ</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dakota Rice</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                               
                                                <td></td>
                                                <td class="td-actions text-right">
<!--                                                             <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button> -->

                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Minerva Hooper</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                               
                                                                                                <td></td>
                                                <td class="td-actions text-right">
<!--                                                             <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button> -->
  
                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Sage Rodriguez</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                               
                                                                                                <td></td>
                                                <td class="td-actions text-right">
<!--                                                             <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button> -->

                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Philip Chaney</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                             
                                                                                                <td></td>
                                                <td class="td-actions text-right">
<!--                                                             <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button> -->

                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Doris Greene</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>

                                                                                                <td></td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>

                                                        </td>
                                            </tr>
                                            <tr>
                                                <td>Mason Porter</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>

                                                                                                <td></td>
                                                <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>

                                                        </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
            </div>



                </div>
            </div>

</body>
<!--   Core JS Files   -->
<script src="js/m/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/m/bootstrap.min.js" type="text/javascript"></script>
<script src="js/m/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="js/m/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="js/m/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="js/m/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="js/m/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="js/m/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="js/m/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>