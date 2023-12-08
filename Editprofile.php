<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
}else {
   header("Location: index.php");
exit();

}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>

</head>
<body>
<form action="EditName.php" method="post">
     	<h2>EDIT PROFILE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p ><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        
         <?php if (isset($_GET['success'])) { ?>
        <p ><?php echo $_GET['success']; ?></p>
          <?php } ?>
     	<label>New Name</label>
     	<input type="text" name="new_N" placeholder="New Name">
        <br>
		<label>Confirm New Name</label>
     	<input type="text" name="C_new_N" placeholder="Confirm New Name"><br> <br>
    
		 <button type="submit">CONFIRM EDIT</button><br><br>
          <a href="home.php">HOME</a> <br>
		 
     </form>
	 <a href="EditDegree.php">CHANGE DEGREE</a> 


	
</body>
</html>


