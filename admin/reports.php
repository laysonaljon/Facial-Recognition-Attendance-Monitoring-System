<!doctype html>
<html class="no-js" lang="en">
<title>EAccess</title>
<?php include 'includes/header.php'?>


    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
<body>
  
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <h1>EACCESS </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#department"><i class="fa fa-building"></i> Yearlevel/Strand</a>
                        </li>
                     
                        </li>
                        <li><a data-toggle="tab" href="#faculty"><i class="fa fa-users"></i> Faculty</a>
                        </li>
                        <li><a data-toggle="tab" href="#student"><i class="fa fa-graduation-cap"></i> Student</a>
                        </li>
                        <li><a data-toggle="tab" href="#face"><i class="fa fa-user-plus"></i> Face Enrollment </a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#report"><i class="fa fa-bar-chart"></i> Attendance Report</a>
                        </li>
                        <li><a data-toggle="tab" href="#account"><i class="fa fa-user-secret"></i> Account</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.php">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="department" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-department.php">Yearlevel/Strand</a>
                                </li>
                                <li><a href="manage-department.php">Yearlevel/Strand</a>
                                </li>
                            </ul>
                        </div>
                       
                        <div id="faculty" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-faculty.php">Add Faculty</a>
                                </li>
                                <li><a href="manage-faculty.php">Manage Faculty</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                        <div id="student" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-student.php">Add Student</a>
                                </li>
                                <li><a href="manage-student.php">Manage Student</a>
                                </li>
                            </ul>
                        </div>
                        <div id="face" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="enroll.php">Enroll Face</a>
                                </li>
                            </ul>
                        </div>
                        <div id="report" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="reports.php">Attendance Report</a>
                                </li>
                            </ul>
                        </div>
                        <div id="account" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                                <li><a href="profile.php">Profile</a>
                                </li>
                                <li><a href="#">Account</a>
                                </li>
                                <li><a href="../">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Attendance Reports</h2>
                        </div>
                        <div class="row">
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                     <div class="card">
                        <div class="card-body">
                           <table class="table table-bordered mytable">
                              <thead>
                                 <td>
                                    <h6>Student's Name</h6>
                                 
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                     <div class="card">
                        <div class="card-body">
                           <canvas id="bargraph" height="230"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
   
<?php include 'includes/footer.php'?>
<title>EAccess</title>
</body>

</html>