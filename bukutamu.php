<?php
// Koneksi ke database
$host = 'localhost';  // Ganti dengan host database Anda
$user = 'root';       // Ganti dengan username database Anda
$password = '';        // Ganti dengan password database Anda
$dbname = 'bukutamu';  // Ganti dengan nama database Anda

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menyimpan pesan ke database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['edit_id'])) {
        // Proses edit
        $edit_id = $_POST['edit_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $address = $_POST['address'];
        $date = date('Y-m-d H:i:s');

        $stmt = $conn->prepare("UPDATE messages SET name = ?, email = ?, message = ?, alamat = ?, date = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $name, $email, $message, $address, $date, $edit_id);
        
        if ($stmt->execute()) {
            header("Location: bukutamu.php?edit_id=$edit_id&success=1");
        } else {
            $message = '<div class="alert error">Terjadi kesalahan saat memperbarui pesan.</div>';
        }
        $stmt->close();
    } else {
        // Proses input baru
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $address = $_POST['address'];
        $date = date('Y-m-d H:i:s');
        
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message, alamat, date) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $message, $address, $date);
        
        if ($stmt->execute()) {
            header("Location: bukutamu.php?success=1");
        } else {
            $message = '<div class="alert error">Terjadi kesalahan saat menyimpan pesan baru.</div>';
        }
        $stmt->close();
    }
}

// Menangani penghapusan pesan
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        header("Location: bukutamu.php?delete_success=1");
    } else {
        $message = '<div class="alert error">Gagal menghapus pesan.</div>';
    }
    $stmt->close();
}

// Mengambil pesan dari database
$edit_id = isset($_GET['edit_id']) ? $_GET['edit_id'] : '';
if ($edit_id) {
    $stmt = $conn->prepare("SELECT * FROM messages WHERE id = ?");
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $message_data = $result->fetch_assoc();
    $stmt->close();
} else {
    $message_data = ['name' => '', 'email' => '', 'alamat' => '', 'message' => ''];
}

$result = $conn->query("SELECT * FROM messages ORDER BY date DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu - Portofolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
    /* Reset dan styling dasar */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f6f9;
        color: #333;
        line-height: 1.6;
    }

    h2,
    h3 {
        color: #2c3e50;
    }

    /* Header */
    header {
        background-color: #3498db;
        color: white;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
    }

    .logo {
        font-size: 2rem;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .nav-buttons {
        display: flex;
        gap: 15px;
    }

    .nav-buttons a {
        color: white;
        text-decoration: none;
        font-size: 1rem;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: color 0.3s ease;
    }

    .nav-buttons a:hover {
        color: #f1c40f;
    }

    /* Container utama */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Styling Form */
    .form-box {
        background-color: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        text-align: center;
    }

    .form-box input,
    .form-box textarea {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .form-box button {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 1.2rem;
    }

    .form-box button:hover {
        background-color: #2980b9;
    }

    /* Styling Tabel */
    .table-box {
        margin-top: 40px;
    }

    .table-box table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
    }

    .table-box th,
    .table-box td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table-box th {
        background-color: #3498db;
        color: white;
    }

    .table-box td {
        background-color: #f9f9f9;
    }

    .table-box td span {
        cursor: pointer;
    }

    /* Pesan Alert */
    .alert {
        padding: 12px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: bold;
    }

    .success {
        background-color: #2ecc71;
        color: white;
    }

    .error {
        background-color: #e74c3c;
        color: white;
    }

    /* Button Hapus */
    .delete-btn {
        color: #e74c3c;
        text-decoration: none;
        font-size: 1rem;
    }

    .delete-btn:hover {
        color: #c0392b;
    }

    /* Button Edit */
    .edit-btn {
        color: #3498db;
        text-decoration: none;
        font-size: 1rem;
    }

    .edit-btn:hover {
        color: #2980b9;
    }
    </style>
</head>

<body>
    <header>
        <div class="logo">Buku Tamu Saya</div>
        <!-- Navigasi Buttons -->
        <div class="nav-buttons">
            <a href="index.php"><i class="fas fa-home"></i> Beranda</a>
            <a href="portfolio.php"><i class="fas fa-briefcase"></i> Portofolio</a>
        </div>
    </header>

    <div class="container">
        <h2>Buku Tamu</h2>

        <!-- Pesan Alert -->
        <?php if (isset($message)) { echo $message; } ?>

        <!-- Form Buku Tamu -->
        <div class="form-box">
            <?php if ($edit_id && $message_data): ?>
            <h3>Edit Pesan Anda</h3>
            <form action="" method="post">
                <input type="hidden" name="edit_id" value="<?= $message_data['id'] ?>">
                <input type="text" name="name" placeholder="Nama Anda"
                    value="<?= htmlspecialchars($message_data['name']) ?>" required>
                <input type="email" name="email" placeholder="Email Anda"
                    value="<?= htmlspecialchars($message_data['email']) ?>" required>
                <input type="text" name="address" placeholder="Alamat Anda"
                    value="<?= htmlspecialchars($message_data['alamat']) ?>" required>
                <textarea name="message" placeholder="Pesan Anda" rows="5"
                    required><?= htmlspecialchars($message_data['message']) ?></textarea>
                <button type="submit">Perbarui Pesan</button>
            </form>
            <?php else: ?>
            <h3>Tinggalkan Pesan Anda</h3>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <input type="text" name="address" placeholder="Alamat Anda" required>
                <textarea name="message" placeholder="Pesan Anda" rows="5" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
            <?php endif; ?>
        </div>

        <!-- Tabel Daftar Pesan Tamu -->
        <div class="table-box">
            <h3>Daftar Pesan Tamu</h3>
            <?php if ($result && $result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['alamat']) ?></td>
                        <td>
                            <span title="<?= htmlspecialchars($row['message']) ?>">
                                <?= substr($row['message'], 0, 100) . (strlen($row['message']) > 100 ? '...' : '') ?>
                            </span>
                        </td>
                        <td><?= $row['date'] ?></td>
                        <td>
                            <a href="bukutamu.php?edit_id=<?= $row['id'] ?>" class="edit-btn">
                                <i class="fas fa-edit"></i> Edit
                            </a> |
                            <a href="bukutamu.php?delete_id=<?= $row['id'] ?>" class="delete-btn"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
            <p>Belum ada pesan.</p>
            <?php endif; ?>
        </div>
    </div>

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
</body>

</html>