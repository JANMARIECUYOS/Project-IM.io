    <?php  
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $email = $_POST['email'];
    //we need this token to contain  characters we can include in a URL though the random bytes funtion returns unprintable characters
    //hex function converts the characters to a hex string
    $token= bin2hex(random_bytes(16));
    // $token_hash = hash ("md5",$token); 
    $token_hash = hash("sha256",$token);
    $expiry= date("Y-m-d H:i:s", time() +60  * 30); //token will only be available for 30 minutes//
    $mysqli = require  __DIR__."/db_conn.php";
    if (!($mysqli instanceof mysqli)) {
        die("Database connection error");
    }
    $sql = "UPDATE users SET reset_token_hash=?, reset_token_expires_at=? WHERE email=?";
    $stmt= $mysqli->prepare($sql);
    $stmt->bind_param("sss", $token_hash, $expiry, $email);
    $stmt->execute();

    if ($mysqli->affected_rows) {
    $mail = require __DIR__."/mailer.php";
    $mail->setFrom("noreply@gmail.com");
    $mail->addAddress($email);
    $mail->Subject="Password Reset";
    $mail->Body=<<<END
    click <a href="http://example.com/reset-password.php?token=$token">here</a>
    to reset your password
    END;

    
    try {
        $mail->send();

    } catch (Exception $e) {
        echo "message could not be sent.Mailer Error:{$mail->ErrorInfo}";
    }
     }    echo "Test email has been sent.";
    
    ?>
