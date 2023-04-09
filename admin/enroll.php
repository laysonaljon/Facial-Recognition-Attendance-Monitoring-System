<!doctype html>
<html class="no-js" lang="en">
<title>EAccess</title>
<?php include 'includes/header.php'?>
      <script src="../asset/js/modernizr.js"></script>
      <script src="../asset/js/vue.min.js"></script>
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

    
    
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#department"><i class="fa fa-building"></i> Yearlevel/Strand</a>
                        </li>
                        
                        <li><a data-toggle="tab" href="#faculty"><i class="fa fa-users"></i> Faculty</a>
                        </li>
                        <li><a data-toggle="tab" href="#student"><i class="fa fa-graduation-cap"></i> Student</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#face"><i class="fa fa-user-plus"></i> Face Enrollment </a>
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
                        <div id="event" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="add-event.php">Add Event</a>
                                </li>
                                <li><a href="manage-event.php">Manage Event</a>
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
                        <div id="face" class="tab-pane in active  notika-tab-menu-bg animated flipInX">
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
    <!-- Main Menu area End-->

    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap mg-t-30">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2><i class="fa fa-user"></i> Face Enrollment</h2>
                            </div>
                                <div class="form-example-int form-horizental mg-t-15">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Student ID</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" id="Student_id" required name="Student_id">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-example-int form-horizental mg-t-15">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm">Scan Face</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="nk-int-st">
                                                    <div class="col-xs-12 preview-container">
                                                        <figure class="box frame" style="width:100px;height:100px"> </figure>
                                                        <video id="video" width="300" height="300" autoplay></video>
                                                        <canvas id="canvas"></canva>
                                                    </div>
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
                                            <button class="btn btn-success notika-btn-success" id="snap">Submit</button>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                <!-- Form Element area End-->
                               <div>

<?php include 'includes/footer.php'?>
<script src="../asset/js/instascan.min.js"></script>
<script src="../asset/js/main.js"></script>
</body>

</html>
<script>
    const video = document.querySelector('#video');
    const canvas = document.querySelector('#canvas');
    const snapButton = document.querySelector('#snap');

    // Get access to the camera
    navigator.mediaDevices.getUserMedia({ video: true })
      .then(stream => {
        // Set the video source to the camera stream
        video.srcObject = stream;
        video.play();
      })
      .catch(error => {
        console.error(error);
      });

    // Capture the image and save it as a file
    snapButton.addEventListener('click', () => {
      // Capture the current frame of the video and draw it on the canvas
      canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

      // Convert the canvas data to a blob
      canvas.toBlob(blob => {
        // Create a new form data object
        const formData = new FormData();

        // Generate the filename using today's date and the student ID
        const date = new Date();
        const filename = `image/${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}_${document.querySelector('#Student_id').value}.jpg`;

        // Append the blob to the form data object with the generated filename
        formData.append('image', blob, filename);
        formData.append('Student_id', document.querySelector('#Student_id').value);

        // Send the form data to the server using fetch()
        fetch('save-photo.php', {
          method: 'POST',
          body: formData
        })
        .then(response => {
          console.log(response);
          location.reload();
        })
        .catch(error => {
          console.error(error);
          location.reload();
        });
      }, 'image/jpeg');
    });

</script>
