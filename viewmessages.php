<?php
	include 'db1.php';
	$sql = "SELECT * FROM messages";
	$qry = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Messages</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dbed34b83a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
	<link rel = "stylesheet" href = "assets/css/modal.css">
	<link rel = "stylesheet" href = "assets/style.css">
</head>
<body >
	<div class = "container pt-5 " style ="background-color:e8e4e1">
		<div class = "box" style ="background-color:e8e4e1">
			<fieldset class="border p-2" style ="background-color:e8e4e1">
				<legend><i style = "font-size:60px" class="fas fa-envelope-open-text"></i></legend>

				<!-- The Modal -->
				<div id = "myModal" class = "modal">
					<!-- Modal Content -->
				<div class = "modal-content">
					<span class = "close">&times;</span>
					<div class = "modal-header">
						<h2>Update Resume</h2>
					</div>
					<div class = "modal-body">
					<p>Sadfa</p>
					</div>
					<div class = "modal-footer">
						<p>Some text</p>
					</div>
				</div>
				</div>
				<h1 class = 'text-center' style = "margin-top: -30px">Messages</h1>
			<table class="table">
				 <thead>
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Messages</td>
					<td>Control</td>
				</tr>
				 </thead>
				   <tbody>
			<?php	while($fetch = mysqli_fetch_array($qry)) {?>
					<tr>
						<td><?php echo $fetch['name']?></td>
						<td><?php echo $fetch['email']?></td>
						<td><?php echo $fetch['message']?></td>
			<?php   echo "<td><a href = 'deletemessages_query.php?delete=$fetch[id]'>Delete</td>";
							?>
					</tr>	
				<?php }?>
				  </tbody>
					</table>
			</fieldset>
		</div>
	</div>


	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
</body>
</html>
