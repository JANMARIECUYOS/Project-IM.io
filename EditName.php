<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
    include "db_conn.php";
if (isset($_POST['new_N']) && isset($_POST['C_new_N'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$new_N = validate($_POST['new_N']);
     $C_new_N = validate($_POST['C_new_N']);
if(empty($new_N)){
    header("Location:  Editprofile.php? error=new Name is required");
        exit();
 }else if($new_N != $C_new_N){
  header("Location: Editprofile.php? error=New Name does not match");
        exit();
}else{
$id = $_SESSION['id'];
$name = $_SESSION['name'];
 $sql = "SELECT * FROM users WHERE id=$id AND  name = '$name' ";
 $result = mysqli_query($conn, $sql);
 
if(mysqli_num_rows($result) == 1){
    $sql = "UPDATE users SET name = '$new_N' WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header("Location:  Editprofile.php? success=Your profile has been changed Please Log in again  <a href='logout.php'>Logout</a>");

}else{
    header("Location: Editprofile.php? error=Incorrect Name");
        exit();
}
}
 } else{
        header("Location: Editprofile.php");
        exit();
    }

}else {
        header("Location: index.php");
       exit();
}

 ?>



