<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $file = $_FILES['image'];
  $tmp_path = $file['tmp_name'];
  $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
  $upload_path = 'image/' . date('Ymd-His') . '.' . $file_extension;

  // Move the uploaded file to the desired folder
  if (move_uploaded_file($tmp_path, $upload_path)) {
    echo 'File saved successfully.';
  } else {
    echo 'Error saving file.';
  }
}
?>






