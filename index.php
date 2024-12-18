<?php
// Cek apakah file gambar profil tersedia
$foto_profil = 'jay.png';
if (!file_exists($foto_profil)) {
    $foto_profil = 'https://ui-avatars.com/api/?name=Muhammad+Ridwan&size=200';
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pribadi - Beranda</title>
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

    @keyframes blinking {
        50% {
            border-color: transparent;
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

    .menu a i {
        margin-right: 8px;
    }

    /* Main Content */
    main {
        max-width: 90%;
        margin: 100px auto 40px auto;
        background: #fff;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        animation: slideIn 1s ease-in-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .profile-section {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 30px;
    }

    .profile-photo {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    }

    .profile-photo:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    }

    .profile-info {
        flex: 1;
    }

    .profile-info h2 {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #4a90e2;
    }

    .profile-info p {
        margin-bottom: 15px;
        line-height: 1.6;
        color: #555;
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
        background: linear-gradient(135deg, #1a1a1a 0%, #2c3e50 50%, #4a90e2 100%);
    }

    #dark-mode-toggle {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        color: white;
        cursor: pointer;
    }

    #dark-mode-toggle.active i {
        color: #f1c40f;
    }
    </style>
</head>

<body>

    <!-- Dark Mode Toggle -->
    <header>
        <h1 style="font-family: 'Roboto', sans-serif;">Selamat Datang</h1>
        <span id="typing-effect">Di Website Pribadi Saya</span>
        <button id="dark-mode-toggle"><i class="fas fa-moon"></i></button>
    </header>

    <!-- Menu -->
    <div class="menu">
        <a href="portfolio.php"><i class="fas fa-briefcase"></i> Portofolio</a>
        <a href="bukutamu.php"><i class="fas fa-address-book"></i> Buku Tamu</a>
    </div>

    <!-- Main Content -->
    <main>
        <div class="profile-section">
            <img src="<?php echo $foto_profil; ?>" alt="Foto Profil" class="profile-photo">
            <div class="profile-info">
                <h2>Tentang Saya</h2>
                <p>Halo, saya <strong>Muhammad Ridwan Jaelani</strong>, seorang mahasiswa Ilmu Komputer dengan fokus
                    pada <strong>Pengembangan Web</strong>, <strong>Aplikasi</strong>, dan <strong>Kecerdasan
                        Buatan</strong>.</p>
                <p>Saat ini saya mengembangkan proyek <strong>Sistem Manajemen Buku Tamu Digital</strong> dan aktif di
                    berbagai komunitas teknologi.</p>
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

    <script>
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    darkModeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        darkModeToggle.classList.toggle('active');
    });
    </script>

</body>

</html>