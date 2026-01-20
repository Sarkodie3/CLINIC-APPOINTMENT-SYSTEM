<!DOCTYPE html>
<html>
<head>
    <title>Login | Clinic</title>
    <link rel="stylesheet" href="doctor.css">
    <style>
        /* Login page styles */
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: #f7f9fc;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .login-container h2 {
            color: #0b3d91;
            margin-bottom: 20px;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            background-color: #0b3d91;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .login-container button:hover {
            background-color: #06478f;
        }

        .login-container a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #0b3d91;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">🏥 CLINIC & MATERNAL</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="appointments.php">Appointments</a>
        <a href="doctors.php">Doctors</a>
        <a href="contact.php">Contact</a>
        <a href="login.php" class="login-btn">Login</a>
    </nav>
</header>

<?php
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Redirect to home after login
    header("Location: index.php");
    exit();
}
?>

<section class="login-container">
    <h2>Login</h2>

    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <a href="index.php">⬅ Back to Home</a>
</section>

<footer>
    <p>© 2026 Clinic & Maternal Health Center</p>
</footer>

</body>
</html>
