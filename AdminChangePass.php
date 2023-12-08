<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}else {
   header("Location: index.php");
exit();

}
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>

</head>
<body>
<form action="changeP.php" method="post">
     	<h2>CHANGE PASSWORD</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p ><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        

         <?php if (isset($_GET['success'])) { ?>
               <p ><?php echo $_GET['success']; ?></p>
          <?php } ?>


     	<label>Old Password</label>
     	<input type="password" name="op" placeholder="Old Password"><br>

     	<label>New Password</label>
     	<input type="password" name="np" placeholder="New Password"><br>
        <br>
        <label>Confirm New Password</label>
     	<input type="password" name="C_np" placeholder="Confirm New Password"><br>

     	<button type="submit">CHANGE</button>
          <a href="admin_home.php">HOME</a>
     </form>
</body>
</html>


