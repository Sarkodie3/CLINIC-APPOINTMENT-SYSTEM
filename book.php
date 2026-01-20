<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment | Clinic</title>
    <link rel="stylesheet" href="doctor.css">
    <style>
        /* Book appointment page styles */
        .book-section {
            max-width: 500px;
            margin: 60px auto;
            padding: 30px;
            background-color: #f7f9fc;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .book-section h2 {
            color: #0b3d91;
            margin-bottom: 20px;
        }

        .book-section input,
        .book-section select,
        .book-section textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .book-section button {
            width: 100%;
            padding: 12px;
            background-color: #0b3d91;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .book-section button:hover {
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

<section class="book-section">
    <h2>Book an Appointment</h2>

    <form action="book.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <select name="doctor" required>
            <option value="">Select Doctor</option>
            <option value="violet">Dr. Violet – General Practitioner</option>
            <option value="vivi">Dr. Vivi – Maternal Specialist</option>
        </select>
        <input type="date" name="date" required>
        <textarea name="notes" placeholder="Additional Notes" rows="4"></textarea>
        <button type="submit">Book Appointment</button>
    </form>

    <?php
    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['doctor'], $_POST['date'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $doctor = $_POST['doctor'];
        $date = $_POST['date'];
        echo "<p style='color:green; margin-top:15px;'>Thank you $name! Your appointment with Dr. $doctor is booked for $date.</p>";
    }
    ?>

    <a href="index.php" class="back-home">⬅ Back to Home</a>
</section>

<footer>
    <p>© 2026 Clinic & Maternal Health Center</p>
</footer>

</body>
</html>
