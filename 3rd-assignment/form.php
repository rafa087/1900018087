<?php
        $nama = "";
        $alamat ="";
        $Jkelamin ="";
        $telp= "";
        $ttl ="";
        $level ="";
        $email ="";

        if(isset($_POST["simpan"])) {
          $nama = $_POST["nama"];
          $ttl = $_POST["ttl"];
          $alamat = $_POST["alamat"];
          $telp = $_POST["telp"];
          $email = $_POST["email"];
          $Jkelamin = $_POST["Jkelamin"];
          $level = $_POST["level"];
        }


        $f1 = fopen("tablecourse.txt", "a+" );
        fputs ($f1,"Name : $nama \n");
        fputs ($f1,"Birth/Place : $ttl\n");
        fputs ($f1,"Address : $alamat\n");
        fputs ($f1,"Phone : $telp \n");
        fputs ($f1,"E-mail : $email\n");
        fputs ($f1,"Gender : $Jkelamin\n");
        fputs ($f1,"Level : $level\n");
        
        fclose($f1);
       
?>
