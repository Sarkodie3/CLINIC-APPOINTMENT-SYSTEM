<!DOCTYPE html>
<html>
<head>
    <title>Services | Clinic</title>
    <link rel="stylesheet" href="doctor.css">
    <style>
        /* Services page specific styles */
        .services-section {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }

        .services-section h2 {
            color: #0b3d91;
            margin-bottom: 20px;
        }

        .services-section p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .service-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .service-card {
            background-color: #f7f9fc;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 20px;
            width: 250px;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card h3 {
            color: #06478f;
            margin-bottom: 10px;
        }

        .service-card p {
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

<section class="services-section">
    <h2>Our Services</h2>
    <p>Providing Compassionate HealthCare For Your Family</p>

    <div class="service-cards">
        <div class="service-card">
            <h3>General Clinic</h3>
            <p>Diagnosis, consultation, and treatment for all patients.</p>
        </div>
        <div class="service-card">
            <h3>Maternal Care</h3>
            <p>Antenatal & postnatal care to ensure healthy mothers and babies.</p>
        </div>
        <div class="service-card">
            <h3>Child Health</h3>
            <p>Vaccination, growth monitoring, and pediatric care services.</p>
        </div>
    </div>

    <a href="index.php" class="back-home">⬅ Back to Home</a>
</section>

<footer>
    <p>© 2026 Clinic & Maternal Health Center</p>
</footer>

</body>
</html>
