<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Style -->
    <style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.8;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Header */
    header {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 50%, #6dd5fa 100%);
        color: #fff;
        text-align: center;
        padding: 50px 20px;
        position: relative;
        animation: fadeIn 1.5s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    header h1 {
        font-size: 3rem;
        margin-bottom: 10px;
        text-shadow:
            0 0 10px #4a90e2,
            0 0 20px #4a90e2,
            0 0 30px #6dd5fa,
            0 0 40px #6dd5fa;
        letter-spacing: 2px;
        animation: glowingText 2s infinite alternate ease-in-out;
    }

    header span {
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        animation: typing 3.5s steps(30) 1 normal both, blink 0.75s step-end infinite;
        border-right: 3px solid white;
        font-size: 1.5rem;
        color: #6dd5fa;
    }

    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes glowingText {
        0% {
            text-shadow:
                0 0 10px #4a90e2,
                0 0 20px #4a90e2,
                0 0 30px #6dd5fa,
                0 0 40px #6dd5fa;
        }

        100% {
            text-shadow:
                0 0 15px #6dd5fa,
                0 0 25px #4a90e2,
                0 0 35px #6dd5fa,
                0 0 45px #4a90e2;
        }
    }

    /* Navigation */
    .menu {
        background-color: #2c3e50;
        text-align: center;
        padding: 15px 0;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .menu a {
        color: #fff;
        text-decoration: none;
        font-size: 1.1rem;
        margin: 0 20px;
        padding: 8px 16px;
        border-radius: 8px;
        transition: background 0.3s ease, transform 0.3s ease-in-out;
    }

    .menu a:hover {
        background: #3498db;
        transform: scale(1.1);
    }

    /* Main Content */
    main {
        max-width: 90%;
        margin: 100px auto;
        background: #fff;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    main h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #333;
    }

    main p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        color: #555;
    }

    /* Choice Box */
    .choice-box-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .choice-box {
        background: #e3f2fd;
        border-radius: 8px;
        padding: 20px;
        width: 200px;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .choice-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .choice-box i {
        font-size: 2.5rem;
        color: #03a9f4;
    }

    .choice-box h3 {
        font-size: 1.5rem;
        margin-top: 15px;
        color: #0288d1;
    }

    /* Footer */
    footer {
        background-color: #2c3e50;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }

    footer p {
        margin-bottom: 10px;
    }

    footer a {
        color: #f1c40f;
        margin: 0 10px;
        font-size: 1.5rem;
        transition: color 0.3s ease, transform 0.3s ease-in-out;
    }

    footer a:hover {
        color: #fff;
        transform: scale(1.2);
    }

    /* Dark Mode */
    body.dark-mode {
        background-color: #333;
        color: #f4f4f4;
    }

    body.dark-mode header {
        background: linear-gradient(135deg, #1a1a1a, #2c3e50, #4a90e2);
    }

    #dark-mode-toggle {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        font-size: 1.5rem;
        transition: color 0.3s ease, transform 0.3s ease-in-out;
    }

    #dark-mode-toggle.active i {
        color: #f1c40f;
    }
    </style>
</head>

<body>

    <!-- Dark Mode Toggle -->
    <header>
        <h1>Selamat Datang</h1>
        <span id="typing-effect">Di Portofolio Saya</span>
        <button id="dark-mode-toggle"><i class="fas fa-moon"></i></button>
    </header>

    <!-- Menu -->
    <div class="menu">
        <a href="index.php"><i class="fas fa-home"></i> Beranda</a>
        <a href="bukutamu.php"><i class="fas fa-address-book"></i> Buku Tamu</a>
    </div>

    <!-- Main Content -->
    <main>
        <p>Pilih menu di bawah ini untuk melihat riwayat pendidikan, pengalaman, organisasi, dan sertifikasi saya.</p>

        <!-- Choice Boxes -->
        <div class="choice-box-container">
            <div class="choice-box" onclick="window.location.href='pendidikan.php';">
                <i class="fas fa-graduation-cap"></i>
                <h3>Pendidikan</h3>
            </div>
            <div class="choice-box" onclick="window.location.href='pengalaman.php';">
                <i class="fas fa-briefcase"></i>
                <h3>Pengalaman</h3>
            </div>
            <div class="choice-box" onclick="window.location.href='organisasi.php';">
                <i class="fas fa-users"></i>
                <h3>Organisasi</h3>
            </div>
            <div class="choice-box" onclick="window.location.href='sertifikasi.php';">
                <i class="fas fa-certificate"></i>
                <h3>Sertifikasi</h3>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Muhammad Ridwan Jaelani</p>
        <p>
            Ikuti saya di:
            <a href="https://www.instagram.com/rdwn_jyyy/"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/jaelanir"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/muhammad-ridwan-jaelani-8024542a7/"><i class="fab fa-linkedin"></i></a>
        </p>
    </footer>

    <!-- Dark Mode Toggle Script -->
    <script>
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    darkModeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        darkModeToggle.classList.toggle('active');
    });
    </script>

</body>

</html>