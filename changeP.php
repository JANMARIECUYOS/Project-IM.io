<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['C_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
    $C_np = validate($_POST['C_np']);
if(empty($op)){
    header("Location: changePass.php? error=Old Password is required");
        exit();
}else if(empty($np)){
    header("Location: changePass.php? error=New Password is required");
        exit();
}else if($np != $C_np){
    header("Location: changePass.php? error=New Password does not match");
        exit();
}else{
   //hasing password
   $op = md5($op);
   $np = md5($np);
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id=$id AND password = '$op'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1){
    $sql_2 = "UPDATE users SET password = '$np' WHERE id = '$id'";
    mysqli_query($conn, $sql_2);
    header("Location: changePass.php? success=Your password has been changed");

}else{
    header("Location: changePass.php? error=Incorrect Old Password");
        exit();
}
}

 } else{
        header("Location: changePass.php");
        exit();
    }

}else {
        header("Location: index.php");
       exit();
}

 ?>