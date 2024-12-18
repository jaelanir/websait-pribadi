<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisasi - Portofolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
        padding: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    main h2 {
        text-align: center;
        margin-bottom: 40px;
        color: #1e3c72;
        text-transform: uppercase;
        font-size: 2rem;
    }

    .organization-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .organization-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        width: 30%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .organization-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #4a69bd;
        margin-bottom: 15px;
    }

    .organization-item h3 {
        color: #1e3c72;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .organization-item p {
        margin-bottom: 10px;
        color: #666;
        text-align: center;
    }

    .organization-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .badge {
        display: inline-block;
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #4a69bd;
        color: #fff;
        border-radius: 20px;
        font-size: 0.9rem;
        text-transform: uppercase;
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
        color: #f1f1f1;
    }

    header.dark-mode {
        background: linear-gradient(135deg, #222, #444);
    }

    nav.dark-mode {
        background-color: #222;
    }

    footer.dark-mode {
        background-color: #222;
    }

    /* Dark Mode Button */
    #dark-mode-toggle {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        font-size: 1.5rem;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    #dark-mode-toggle.active i {
        color: #ffd700;
    }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Selamat Datang</h1>
        <span>Organisasi Saya</span>
        <button id="dark-mode-toggle"><i class="fas fa-moon"></i></button>
    </header>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="pengalaman.php"><i class="fas fa-briefcase"></i> Pengalaman</a></li>
            <li><a href="sertifikasi.php"><i class="fas fa-certificate"></i> Sertifikasi</a></li>
            <li><a href="pendidikan.php"><i class="fas fa-graduation-cap"></i> Pendidikan</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <!-- List of Organizations -->
    <div class="organization-list">
        <div class="organization-item">
            <img src="osis.jpeg" alt="Osis">
            <h3>Osis</h3>
            <p><strong>Jabatan:</strong> Anggota</p>
            <p><strong>Tahun:</strong> 2017 - 2018</p>
            <p><strong>Deskripsi:</strong> Sebagai anggota OSIS, saya terlibat dalam berbagai kegiatan sekolah,
                mulai dari pengorganisasian acara tahunan, hingga pengembangan program yang mendukung kemajuan
                siswa. Saya juga berperan dalam mendukung kelancaran administrasi dan kegiatan sosial yang
                dilaksanakan oleh OSIS.</p>
            <span class="badge">Selesai</span>
        </div>

        <div class="organization-item">
            <img src="pn.jpeg" alt="Pencak Silat">
            <h3>Pencak Silat</h3>
            <p><strong>Jabatan:</strong> Ketua Rayon</p>
            <p><strong>Tahun:</strong> 2019 - Sekarang</p>
            <p><strong>Deskripsi:</strong> Sebagai Ketua Rayon, saya bertanggung jawab atas koordinasi antar
                anggota, pelaksanaan latihan rutin, serta partisipasi dalam berbagai kompetisi. Saya juga mengatur
                kegiatan sosial yang melibatkan anggota untuk memberikan dampak positif kepada masyarakat sekitar
                melalui seni bela diri.</p>
            <span class="badge">Aktif</span>
        </div>

        <div class="organization-item">
            <img src="pramuka.jpeg" alt="Pramuka">
            <h3>Pramuka</h3>
            <p><strong>Jabatan:</strong> Anggota</p>
            <p><strong>Tahun:</strong> 2017 - 2018</p>
            <p><strong>Deskripsi:</strong> Dalam organisasi Pramuka, saya aktif dalam kegiatan kepanduan dan
                pengabdian masyarakat. Tugas saya meliputi pengorganisasian kegiatan perkemahan, pelatihan
                keterampilan, serta kegiatan pengembangan karakter bagi anggota pramuka di sekolah.</p>
            <span class="badge">Selesai</span>
        </div>

        <div class="organization-item">
            <img src="rohis.jpg" alt="Rohis">
            <h3>Rohis</h3>
            <p><strong>Jabatan:</strong> Pengurus Keagamaan</p>
            <p><strong>Tahun:</strong> 2017 - 2018</p>
            <p><strong>Deskripsi:</strong> Saya aktif dalam mengorganisir kegiatan keagamaan seperti kajian rutin,
                pengajian, serta berbagai acara sosial yang mendukung pengembangan spiritual di kalangan siswa.
                Tanggung jawab saya meliputi koordinasi jadwal kegiatan dan penyediaan materi pengajian.</p>
            <span class="badge">Selesai</span>
        </div>

        <div class="organization-item">
            <img src="pmii.png" alt="PMII">
            <h3>PMII</h3>
            <p><strong>Jabatan:</strong> Anggota</p>
            <p><strong>Tahun:</strong> 2024 - Sekarang</p>
            <p><strong>Deskripsi:</strong> Sebagai anggota PMII, saya terlibat dalam berbagai diskusi intelektual
                dan kegiatan sosial kemasyarakatan. Organisasi ini berfokus pada pengembangan ideologi, sosial, dan
                politik bagi mahasiswa, serta memperjuangkan aspirasi mahasiswa dalam kegiatan nasional.</p>
            <span class="badge">Aktif</span>
        </div>

        <div class="organization-item">
            <img src="HIMA.png" alt="Himakom">
            <h3>Himakom</h3>
            <p><strong>Jabatan:</strong> Pengurus Akademik</p>
            <p><strong>Tahun:</strong> 2024 - Sekarang</p>
            <p><strong>Deskripsi:</strong> Di Himakom, saya bertugas membantu penyelenggaraan seminar, pelatihan,
                dan program akademik yang bertujuan untuk meningkatkan kualitas pendidikan dan keterampilan
                mahasiswa di bidang teknologi dan informatika.</p>
            <span class="badge">Aktif</span>
        </div>

        <div class="organization-item">
            <img src="knpi.jpeg" alt="Knpi">
            <h3>Knpi</h3>
            <p><strong>Jabatan:</strong> PSDM (Pengembangan Sumber Daya Manusia)</p>
            <p><strong>Tahun:</strong> 2024 - 2027</p>
            <p><strong>Deskripsi:</strong> Sebagai bagian dari bidang PSDM, saya terlibat dalam pengembangan program
                pelatihan, seminar, dan workshop untuk meningkatkan kapasitas pemuda dalam berbagai bidang, termasuk
                kepemimpinan dan kewirausahaan. Fokus utama adalah memberdayakan generasi muda untuk berkontribusi
                lebih dalam masyarakat.</p>
            <span class="badge">Aktif</span>
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