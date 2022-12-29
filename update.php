<?php
      require "functions.php";
      $id = $_REQUEST['id'];
      $nama  = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $alamat = $_REQUEST['address'];
      $jenis_kelamin = $_REQUEST['gender'];
      $posisi = $_REQUEST['position'];
      $status = $_REQUEST['status'];
      $mysqli  = "UPDATE karyawan SET nama='$name', email='$email', adress='$alamat', gender='$gender', position='$position', status='$status' WHERE id='$id'";
      $result  = mysqli_query($conn, $mysqli);
      mysqli_close($conn);
    
      header("location:index.php")
?>