<?php include '../connection.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $file = $_FILES['image'];
  $tmp_path = $file['tmp_name'];
  $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
  $upload_path = '../image/' . date('Ymd-His') . '.' . $file_extension;

  // Move the uploaded file to the desired folder
  if (move_uploaded_file($tmp_path, $upload_path)) {
    $con = openConnection();
    $student_id = $_POST['Student_id'];
    $image_filename = basename($upload_path);

    $strSql ="INSERT INTO tblcapture(student_id, image, status) VALUES('$student_id', '$image_filename', 1)";
    if (mysqli_query($con, $strSql)){
          echo '<script type="text/javascript">'; 
          echo 'alert("Succesfully enroll face");'; 
          echo 'window.location.href = "enroll.php";';
          echo '</script>';
      }
      else{
        echo '<script type="text/javascript">'; 
          echo 'alert("Failed to enroll face");'; 
          echo 'window.location.href = "enroll.php";';
          echo '</script>';
      }
    echo 'File saved successfully.';
  } else {
    echo 'Error saving file.';
  }
}
?>

