<!DOCTYPE html>
<html>
<head>
    <title>Our Doctors | Clinic</title>
    <link rel="stylesheet" href="doctor.css">
    <style>
        /* Doctors page styles */
        .doctors-section {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }

        .doctors-section h2 {
            color: #0b3d91;
            margin-bottom: 20px;
        }

        .doctor-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .doctor-card {
            background-color: #f7f9fc;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 20px;
            width: 250px;
            transition: transform 0.3s ease;
            text-align: center;
        }

        .doctor-card:hover {
            transform: translateY(-5px);
        }

        .doctor-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .doctor-card h4 {
            color: #06478f;
            margin-bottom: 5px;
        }

        .doctor-card p {
            font-size: 16px;
            color: #333;
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

<section class="doctors-section">
    <h2>Our Doctors</h2>

    <div class="doctor-cards">
        <div class="doctor-card">
            <img src="violet.jpeg" alt="Dr. Violet">
            <h4>Dr. Violet</h4>
            <p>General Practitioner</p>
        </div>

        <div class="doctor-card">
            <img src="Vivi.jpeg" alt="Dr. Vivi">
            <h4>Dr. Vivi</h4>
            <p>Maternal Specialist</p>
        </div>
    </div>

    <a href="index.php" class="back-home">⬅ Back to Home</a>
</section>

<footer>
    <p>© 2026 Clinic & Maternal Health Center</p>
</footer>

</body>
</html>
