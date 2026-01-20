<!DOCTYPE html>
<html>
<head>
    <title>Contact Us | Clinic</title>
    <link rel="stylesheet" href="doctor.css">
    <style>
        /* Extra styles for contact page */
        .contact-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f7f9fc;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .contact-section h2 {
            text-align: center;
            color: #0b3d91;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 18px;
            margin: 10px 0;
        }

        .contact-form {
            margin-top: 30px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .contact-form button {
            background-color: #0b3d91;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .contact-form button:hover {
            background-color: #06478f;
        }

        a.back-home {
            display: inline-block;
            margin-top: 20px;
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

<section class="contact-section">
    <h2>Contact Us</h2>

    <div class="contact-info">
        <p>📍 Buea, Cameroon</p>
        <p>📞 +237 670361160</p>
        <p>📧 asongsehqueentin291@gmail.com</p>
    </div>

    <div class="contact-form">
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>

        <?php
        if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
            echo "<p style='color:green; margin-top:15px;'>Message sent successfully!</p>";
        }
        ?>
    </div>

    <a href="index.php" class="back-home">⬅ Back to Home</a>
</section>

<footer>
    <p>© 2026 Clinic & Maternal Health Center</p>
</footer>

</body>
</html>
