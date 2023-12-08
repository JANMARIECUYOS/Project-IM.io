<?php 

session_start();


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
} else{
     header("Location:index.php");
     exit();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    
</head>
<body>
    <h1> student</h1>
<h1>Hello, <?php echo $_SESSION['name']; ?> </h1>
 <nav >
 <a href="ChangePass.php"> Change Password</a> <br>
 <a href="Editprofile.php">Edit Profile</a><br>
     <a href="logout.php">Logout</a>
 </nav>
</body>
</html>