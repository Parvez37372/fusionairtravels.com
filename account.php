<?php include('header.php') ?>
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

    .breadcrumb {
        font-size: 18px;
    }

    .breadcrumb a {
        color: white;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }

    .breadcrumb span {
        color: #ff5722;
    }

    .main {
        font-family: 'Segoe UI', sans-serif;
        background: #f7f7f7;
        margin: 0;
        padding: 60px 20px;
        display: flex;
        justify-content: center;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
        max-width: 1200px;
        width: 100%;
    }

    .box {
        background: #fff;
        padding: 35px 30px;
        border-radius: 10px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
        width: 450px;
    }

    h2 {
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
    }

    form input {
        width: 100%;
        padding: 14px;
        margin-bottom: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background: #f3f3f3;
        font-size: 14px;
    }

    .options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
        margin-bottom: 20px;
    }

    .options a {
        text-decoration: none;
        color: #555;
    }

    .btn {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(94deg, rgb(255, 100, 35) 0%, rgb(239, 54, 33) 50%);
        color: #fff;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .divider {
        text-align: center;
        margin: 25px 0;
        position: relative;
    }

    .divider span {
        background: #fff;
        padding: 0 10px;
        position: relative;
        z-index: 1;
    }

    .divider::before {
        content: '';
        height: 1px;
        background: #ccc;
        width: 100%;
        position: absolute;
        top: 50%;
        left: 0;
        z-index: 0;
    }

    .social {
        width: 100%;
        padding: 12px;
        margin-bottom: 12px;
        border: none;
        border-radius: 5px;
        font-weight: 500;
        cursor: pointer;
        font-size: 14px;
    }

    .facebook {
        background: #e8ecf0;
        color: #3b5998;
    }

    .google {
        background: #e8ecf0;
        color: #dd4b39;
    }

    .switch {
        text-align: center;
        font-size: 14px;
        margin-top: 15px;
    }

    .switch a {
        color: #ff5722;
        text-decoration: none;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .box {
            width: 100%;
        }
    }
</style>


<section class="hero">
    <div class="hero-content">
        <h1>Login Register</h1>
        <p class="breadcrumb"><a href="#">Home</a> / <span>Account</span></p>
    </div>
</section>

<div class="main">
    <div class="container">
        <!-- Login Form -->
        <div class="box">
            <h2>Log In To Your Account</h2>
            <form action="login.php" method="POST">
                <input type="text" name="phone" placeholder="Phone" required>
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

        <!-- Register Form -->
        <div class="box">
            <h2>Create An Account</h2>
            <form action="register.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="repeat_password" placeholder="Repeat Password" required>
                <button type="submit" class="btn">Register Now</button>
                <p class="switch">Already Have An Account? <a href="#">Login</a></p>
            </form>
        </div>
    </div>
</div>


<?php include('footer.php') ?>
