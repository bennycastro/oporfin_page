<?php
 session_start();

 $curp = $_SESSION['curp'];
    if(!empty($_FILES['file'])){
      mkdir('../admin/expedientes/'.$curp);
      
      $targetDir = ('../admin/expedientes/'.$curp.'/');
    $filename = basename($_FILES['file']['name']);
    $targetFilePath = $targetDir.$filename;
    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
        echo 'File Uploaded';
    }}


