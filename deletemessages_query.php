<?php
		
    include "db1.php";

    if(isset($_GET['delete'])) {
    	$id = $_GET['delete'];
    	$result = mysqli_query($conn, "DELETE FROM messages WHERE id = $id") or die(
            "error deleting: " . mysqli_error());
        echo "<script>alert('Deleted Successfully')</script>";
    	header("Refresh:1; URL=viewmessages.php");
    }


?>