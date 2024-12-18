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

    .certification-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .certification-item {
        width: 48%;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        position: relative;
    }

    .certification-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #3498db, #6dd5fa);
        border-radius: 15px;
        opacity: 0;
        z-index: -1;
        transition: opacity 0.3s ease;
    }

    .certification-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .certification-item:hover::before {
        opacity: 1;
    }

    .certification-item img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #4a69bd;
        margin-bottom: 15px;
    }

    .certification-item h3 {
        color: #1e3c72;
        font-size: 1.5rem;
        margin-bottom: 10px;
        text-align: center;
    }

    .certification-item p {
        margin-bottom: 10px;
        color: #666;
        text-align: center;
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

    /* Responsive Design */
    @media (max-width: 768px) {
        .certification-item {
            width: 100%;
        }
    }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Selamat Datang</h1>
        <span> Sertifikasi Saya</span>
        <button id="dark-mode-toggle"><i class="fas fa-moon"></i></button>
    </header>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="pengalaman.php"><i class="fas fa-briefcase"></i> Pengalaman</a></li>
            <li><a href="pendidikan.php"><i class="fas fa-graduation-cap"></i> Pendidikan</a></li>
            <li><a href="organisasi.php"><i class="fas fa-users"></i> Organisasi</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <h2>Sertifikasi Saya</h2>

        <div class="certification-container">
            <div class="certification-item">
                <h3 class="certification-title">An introduction to computers and computer</h3>
                <p class="certification-date">Completed: Maret 2024</p>
                <p>Institution: open learn</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Belajar Dasar AI</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: di coding</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Data Visualization with Python</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Machine Learning Basics with Python</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Data Analysis with R Programming</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Power BI for Data Analysis and Visualization</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Data Engineering and ETL with Python</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Deep Learning with Neural Networks</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: di coding</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Time Series Analysis with Python</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: coursera</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Introduction to Big Data and Hadoop</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dicoding</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">SQL Server and Database Management</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dicoding</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Statistical Analysis with R</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Advanced SQL for Data Analysis</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: di coding</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Big Data Analysis with Apache Spark</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Deep Learning with PyTorch</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: di coding</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Natural Language Processing (NLP) with Python</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: di coding</p>
            </div>
            <div class="certification-item">
                <h3 class="certification-title">Data Science Capstone Project</h3>
                <p class="certification-date">Completed: Juli 2023</p>
                <p>Institution: dq lab</p>
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