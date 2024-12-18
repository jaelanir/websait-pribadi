<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengalaman Kerja - Portofolio Saya</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th,
    table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    table th {
        background-color: #3498db;
        color: white;
    }

    table tr:hover {
        background-color: #f1f1f1;
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
        <h1>Portofolio Saya</h1>
        <span id="typing-effect">Pengalaman Kerja</span>
        <button id="dark-mode-toggle"><i class="fas fa-moon"></i></button>
    </header>

    <!-- Menu -->
    <div class="menu">
        <a href="index.php"><i class="fas fa-home"></i> Beranda</a>
        <a href="organisasi.php"><i class="fas fa-users"></i> Organisasi</a>
        <a href="sertifikasi.php"><i class="fas fa-certificate"></i> Sertifikasi</a>
        <a href="pendidikan.php"><i class="fas fa-graduation-cap"></i> Pendidikan</a>
    </div>

    <!-- Main Content -->
    <main>
        <h2>Pengalaman Kerja</h2>
        <table>
            <thead>
                <tr>
                    <th>Perusahaan</th>
                    <th>Posisi</th>
                    <th>Tahun</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>UMKM Taman Pancasila</td>
                    <td>Operator Magang</td>
                    <td>2021</td>
                    <td>Melakukan operasi mesin produksi di bidang industri kecil</td>
                </tr>
                <tr>
                    <td>PT. Prima Parquet Indonesia</td>
                    <td>Operator Produksi</td>
                    <td>2022</td>
                    <td>Operasional mesin produksi produk kayu untuk lantai</td>
                </tr>
                <tr>
                    <td>Steak Kampoeng Reborn</td>
                    <td>Waiter/Waitress</td>
                    <td>2022</td>
                    <td>Pelayanan di restoran steak, membantu pengaturan meja dan pesanan</td>
                </tr>
                <tr>
                    <td>Toko Makanan Burung</td>
                    <td>Operator Packing</td>
                    <td>2022</td>
                    <td>Pengemasan produk makanan burung</td>
                </tr>
                <tr>
                    <td>PT. Indoseiki Metal Utama</td>
                    <td>Magang Operator Produksi</td>
                    <td>2023</td>
                    <td>Melakukan pengawasan dan operasional mesin produksi</td>
                </tr>
                <tr>
                    <td>KPU</td>
                    <td>Pengamat Wilayah</td>
                    <td>2024</td>
                    <td>Memantau jalannya pemilu di tingkat daerah</td>
                </tr>
                <tr>
                    <td>Panwaslu</td>
                    <td>PTPS</td>
                    <td>2024</td>
                    <td>Pengawasan proses pemilu di tingkat lokal</td>
                </tr>
            </tbody>
        </table>
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