<!-- <?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Degree'])) {
}else {
   header("Location: index.php");
exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE</title>
</head>
<body>
<form action="Degree.php" method="post">
     	<h2>CHANGE DEGREE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p ><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        
         <?php if (isset($_GET['success'])) { ?>
        <p ><?php echo $_GET['success']; ?></p>
          <?php } ?>
     	<label>New Degree</label>
     	<input type="text" name="new_D" placeholder="New Degree">
        <br>
		<label>Confirm New Degree</label>
     	<input type="text" name="C_new_D" placeholder="Confirm New Degree"><br> <br>
    
		 <button type="submit">CONFIRM</button><br><br>
          <a href="home.php">HOME</a> <br>
		 
     </form>
	

</body>
</html> -->