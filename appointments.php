<!DOCTYPE html>
<html>
<head>
    <title>Appointments | Clinic</title>
    <link rel="stylesheet" href="doctor.css">
    <style>
        /* Appointments page styles */
        .appointments-section {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f7f9fc;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .appointments-section h2 {
            color: #0b3d91;
            margin-bottom: 20px;
        }

        .appointments-list {
            margin-top: 20px;
            text-align: left;
        }

        .appointments-list p {
            font-size: 16px;
            margin: 10px 0;
        }

        a.back-home {
            display: inline-block;
            margin-top: 30px;
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

<section class="appointments-section">
    <h2>Appointments</h2>

    <div class="appointments-list">
        <p>No appointments scheduled yet.</p>
        <!-- Later, you can pull this from a database -->
    </div>

    <a href="book.php"><button>Book New Appointment</button></a><br><br>
    <a href="index.php" class="back-home">⬅ Back to Home</a>
</section>

<footer>
    <p>© 2026 Clinic & Maternal Health Center</p>
</footer>

</body>
</html>
