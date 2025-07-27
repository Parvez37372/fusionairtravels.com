<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php'; // Your DB connection

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name            = $_POST['name'];
    $email           = $_POST['email'];
    $phone           = $_POST['phone'];
    $password        = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if ($password !== $repeat_password) {
        echo "<script>
            Swal.fire('Error', 'Passwords do not match!', 'error');
        </script>";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $hashed_password);

    if ($stmt->execute()) {
        // ✅ Send Email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            // SMTP config
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sb5668304@gmail.com';        // Your Gmail
            $mail->Password   = 'tcyelvcpbxphyugf';           // App password (not Gmail password)
            $mail->SMTPSecure = 'tls';                        // or 'ssl'
            $mail->Port       = 587;                          // or 465 for SSL

            $mail->setFrom('sb5668304@gmail.com', 'Fusion Air Travels');
            $mail->addAddress($email, $name);                        // To User
            $mail->addAddress('sb5668304@gmail.com', 'Admin Copy'); // To Admin

            $mail->isHTML(true);
            $mail->Subject = 'Fusion Air Travels - New Registration';
            $mail->Body    = "
                <h3>Welcome $name,</h3>
                <p>Thanks for Register at Fusion Air Travels.</p>
                <p>we are contact soon</p>
                
                <p><strong>Your Login Details:</strong></p>
                <p>Email: $email<br>Password: $password</p>
                <hr>
                <p><strong>Admin Copy:</strong></p>
                <p>Name: $name<br>Email: $email<br>Phone: $phone</p>
            ";

            $mail->send();

        } catch (Exception $e) {
            // Optional: log $mail->ErrorInfo
        }

        echo "<script>
            Swal.fire({
                title: 'Success!',
                text: 'Welcome to Fusion Air Travels!',
                icon: 'success'
            }).then(() => {
                window.location.href = 'login.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire('Error', 'User already exists or error occurred.', 'error');
        </script>";
    }
}
?>

<!-- You can keep your HTML form below -->

</body>
</html>
