<?php 
session_start();
include "db_conn.php"; // Include the database connection code

if (isset($_SESSION['id'])) {
    $id = $_GET['id'];
    $sql = "UPDATE users SET status = 0 WHERE id = '$id'";
    
    if (mysqli_query($conn, $sql)) {
        // the window.location.href property is set to "admin_home.php," which will redirect the user to the admin home page after the alert is closed.
        echo '<script>alert("User deactivated successfully"); window.location.href="admin_home.php";</script>'; 
        echo "Error deactivating user: " . mysqli_error($conn);
    }
} else {
    header('location: admin_home.php');
    exit();
}
?>
