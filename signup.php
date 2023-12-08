<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    
</head>
<body>
<form action="signcheck.php" method="POST">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>Degree</label>
          <?php if (isset($_GET['degree'])) { ?>
               <input type="text" 
                      name="degree"  
                      placeholder="Enter Degree"
                      value="<?php echo $_GET['degree']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="degree" 
                      placeholder="degree"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="e Address" 
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="email Address"><br>
          <?php }?>



     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" >Already have an account?</a>
     </form>
</body>
</html>