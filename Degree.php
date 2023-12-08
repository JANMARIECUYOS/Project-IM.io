<?php 
// session_start();

// if (isset($_SESSION['id']) && isset($_SESSION['Degree'])) {
//     include "db_conn.php";

// if ( isset($_POST['new_D']) && isset($_POST['C_new_D'])) {

// 	function validate($data){
//        $data = trim($data);
// 	   $data = stripslashes($data);
// 	   $data = htmlspecialchars($data);
// 	   return $data;
// 	}
	
// 	$new_D = validate($_POST['new_D']);
//     $C_new_D = validate($_POST['C_new_D']);

//  if(empty($new_D)){
//     header("Location: EditDegree.php? error=New Degree is required");
//         exit();
// }else if($new_D != $C_new_D){
//     header("Location: EditDegree.php? error=New Degree does not match");
//         exit();
// }else{
 
// $id = $_SESSION['id'];
// $degree= $_SESSION['Degree'];
// $sql = "SELECT * FROM users WHERE id=$id AND Degree = '$degree'";

// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result) == 1){
//     $sql = "UPDATE users SET Degree = '$new_D' WHERE id = '$id'";
//     mysqli_query($conn, $sql);
//     header("Location: EditDegree.php? success=Your Degree has been changed");

// }else{
//     header("Location: EditDegree.php? error=Incorrect Old Degree");
//         exit();
// }
// }

//  } else{
//         header("Location: EditDegree.php");
//         exit();
//     }

// }else {
//         header("Location: index.php");
//        exit();
// }

 ?>