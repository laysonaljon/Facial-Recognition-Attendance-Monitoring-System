<!doctype html>
<html class="no-js" lang="en">
<title>EAccess</title>
<?php include 'includes/header.php'?>
   
    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
<body>
    <!-- Start Header Top Area -->
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
                        <li><a data-toggle="tab" href="#department"><i class="fa fa-building"></i> Add Yearlevel/Strand</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#faculty"><i class="fa fa-users"></i> Faculty</a>
                        </li>
                        <li><a data-toggle="tab" href="#student"><i class="fa fa-graduation-cap"></i> Student</a>
                        </li>
                        <li><a data-toggle="tab" href="#face"><i class="fa fa-user-plus"></i> Face Enrollment </a>
                        </li>
                        <li><a data-toggle="tab" href="#report"><i class="fa fa-bar-chart"></i> Attendance Reports</a>
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
                                <li><a href="add-department.php">Add Yearlevel/Strand</a>
                                </li>
                                <li><a href="manage-department.php">Manage Yearlevel/Strand</a>
                                </li>
                            </ul>
                        </div>
                    
                        <div id="faculty" class="tab-pane in active notika-tab-menu-bg animated flipInX">
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
                        <div id="report" class="tab-pane notika-tab-menu-bg animated flipInX">
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
    
    <div class="form-element-area">
        <div class="container">
            
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Faculty Information</h2>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Faculty ID No.</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="ex. FCLTY-01">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">First Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Last Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Middle Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Middle Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Gender</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <select class="form-control input-sm" data-live-search="true">
											<option>Male</option>
											<option>Female</option>
										</select>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="hrzn-fm">Strands</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <select class="form-control input-sm" data-live-search="true">
											<option>ABM</option>
                                            <option>HUMSS</option>
                                            <option>HE</option>
                                            <option>ICT</option>
                                            <option>STEM</option>
                                            <option>TVL</option>
										</select>
                                    </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-2">
                                    <label class="hrzn-fm">Year Level</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="nk-int-st">
                                        <select class="form-control input-sm" data-live-search="true">
                                            <option>Grade 11</option>
                                            <option>Grade 12</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Contact</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" Value="09809879878">
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="hrzn-fm">Email</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" Value="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Username</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" Value="username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Password</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="password" class="form-control input-sm" Value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button class="btn btn-success notika-btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
   
<?php include 'includes/footer.php'?>
    
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
</body>

</html>