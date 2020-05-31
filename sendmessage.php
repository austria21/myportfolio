<?php
    include 'db1.php';
    if(isset($_POST['btnsend'])){
        $n = $_POST['fname'];
        $em = $_POST['email'];
        $mess = $_POST['mess'];
        $sql = "INSERT INTO messages (id,name,email,message) VALUES (0,'$n','$em','$mess')";
        $qry = mysqli_query($conn,$sql);
        if($qry){
            echo "<script>alert('Message Sent')</script>";
        }
    }


?>