<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan Saya - Portofolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
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
    nav {
        background-color: #2c3e50;
        padding: 10px 0;
    }

    nav ul {
        display: flex;
        justify-content: center;
        list-style: none;
        margin: 0;
    }

    nav li {
        margin: 0 15px;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        font-size: 1.2rem;
        transition: color 0.3s ease, transform 0.3s ease-in-out;
    }

    nav a:hover {
        color: #f1c40f;
        transform: scale(1.1);
    }

    /* Main Content */
    main {
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
    }

    main h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #2c3e50;
    }

    .timeline {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        /* Jarak antar item */
    }

    .timeline-item {
        display: flex;
        flex-direction: row;
        /* Ubah ke flex-direction: row untuk horizontal */
        align-items: center;
        width: calc(50% - 20px);
        /* Setengah dari container, kurangi jarak padding */
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .timeline-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #3498db;
        margin-right: 20px;
        /* Memberi jarak antara gambar dan konten deskripsi */
    }

    .timeline-item div {
        flex: 1;
    }

    .timeline-item h3 {
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .timeline-item p {
        margin-bottom: 5px;
        color: #555;
    }

    /* Hover effect on timeline items */
    .timeline-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        header h1 {
            font-size: 2rem;
        }

        nav ul {
            flex-direction: column;
            align-items: center;
        }

        .timeline-item {
            flex-direction: column;
            align-items: center;
        }

        .timeline-item img {
            width: 80px;
            height: 80px;
        }
    }

    /* Footer */
    footer {
        background-color: #2c3e50;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        margin-top: 40px;
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

    /* Dark Mode Styles */
    body.dark-mode {
        background-color: #333;
        color: #f4f4f4;
    }

    nav.dark-mode {
        background-color: #000;
    }

    .timeline-item.dark-mode {
        background-color: #444;
    }

    footer.dark-mode {
        background-color: #222;
    }

    /* Dark Mode */
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
        <span>Pendidikan Saya</span>
        <button id="dark-mode-toggle"><i class="fas fa-moon"></i></button>
    </header>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Beranda</a></li>
            <li><a href="organisasi.php"><i class="fas fa-users"></i> Organisasi</a></li>
            <li><a href="sertifikasi.php"><i class="fas fa-certificate"></i> Sertifikasi</a></li>
            <li><a href="pengalaman.php"><i class="fas fa-briefcase"></i> Pengalaman</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <h2>Pendidikan Saya</h2>
        <div class="timeline">
            <div class="timeline-item">
                <img src="sd.jpeg" alt="Logo SD">
                <div>
                    <h3>SD N 02 Bangsri</h3>
                    <p>Status: Lulus</p>
                    <p>2010 - 2016 | Karangpandan, Jawa Tengah, Indonesia</p>
                </div>
            </div>
            <div class="timeline-item">
                <img src="smp.png" alt="Logo SMP">
                <div>
                    <h3>SMP Negeri 2 Karangpandan</h3>
                    <p>Status: Lulus</p>
                    <p>2016 - 2019 | Karangpandan, Jawa Tengah, Indonesia</p>
                </div>
            </div>
            <div class="timeline-item">
                <img src="smk.png" alt="Logo SMK">
                <div>
                    <h3>SMK Penda 2 Karanganyar</h3>
                    <p>Status: Lulus</p>
                    <p>2019 - 2022 | Karanganyar, Jawa Tengah, Indonesia</p>
                </div>
            </div>
            <div class="timeline-item">
                <img src="uym.jpg" alt="Logo Universitas">
                <div>
                    <h3>Universitas Yatsi Madani</h3>
                    <p>Status: Mahasiswa</p>
                    <p>2023 - 2026 | Tangerang, Banten, Indonesia</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Muhammad Ridwan Jaelani</p>
        <p>
            Ikuti saya di:
            <a href="https://www.instagram.com/rdwn_jyyy/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/jaelanir" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/muhammad-ridwan-jaelani-8024542a7/" target="_blank"><i
                    class="fab fa-linkedin"></i></a>
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