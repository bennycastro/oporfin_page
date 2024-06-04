<?php
 session_start();

  $curp = $_SESSION['id_aut'];
  $curpT = ($_SESSION['id_aut']);
    
            if (($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/png")
            || ($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "application/pdf")
            || ($_FILES["file"]["type"] == "application/x-pdf")
            || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
            || ($_FILES["file"]["type"] == "application/vnd.ms-excel")
            || ($_FILES["file"]["type"] == "application/msword")) {
                
                
                    if (!is_dir($curpT)){
                          mkdir('expedientes/'.$curpT);}
                    if (move_uploaded_file($_FILES["file"]["tmp_name"],'expedientes/'.$curpT.'/'.$_FILES['file']['name'])) {
                    echo 'si';
                } else {
                    echo 'no';
                }
    }
     