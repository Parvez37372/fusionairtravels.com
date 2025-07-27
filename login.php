<?php
session_start();
include('config.php'); // DB connection
include('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Store user session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            // SweetAlert Success
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>
                Swal.fire({
                    title: 'Welcome " . $user['name'] . "!',
                    text: 'Login successful!',
                    icon: 'success',
                    confirmButtonText: 'Continue'
                }).then(() => {
                    window.location.href = 'index.php';
                });
            </script>";
            exit;
        } else {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>
                Swal.fire('Error', 'Invalid password!', 'error');
            </script>";
        }
    } else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
            Swal.fire('Error', 'Email not found!', 'error');
        </script>";
    }
}
?>
<style>
    .hero {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        position: relative;
        width: 100%;
        height: 300px;
        background: url('image/about.webp') no-repeat center center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }

    .hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-content h1 {
        font-size: 36px;
        margin-bottom: 10px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
  .main
  {
    align-items:center:
  }
</style>

<!-- HTML LOGIN FORM BELOW -->
<section class="hero">
    <div class="hero-content">
        <h1>Login/Account</h1>
        <p class="breadcrumb"><a href="#">Home</a> / <span>Account</span></p>
    </div>
</section>

<div class="main">
    <div class="container">
        <div class="box">
            <h2>Log In To Your Account</h2>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="options">
                    <label><input type="checkbox" name="keep_logged_in"> Keep me logged in</label>
                    <a href="#">Forgot your password?</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
                <button type="button" class="social facebook">Login With Facebook</button>
                <button type="button" class="social google">Login With Google</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>