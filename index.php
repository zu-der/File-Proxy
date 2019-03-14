<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_FILES['files'])){
  	 $filename = $_FILES['files']['name'];
  	 $file_tmp_name = $_FILES['files']['tmp_name'];
  	 move_uploaded_file($file_tmp_name, "uploads/".$filename);
    }
  }
?>