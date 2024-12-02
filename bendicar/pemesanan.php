<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan - Bendicar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Form Pemesanan Mobil Bendicar</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="daftar-mobil.php">Daftar Mobil</a></li>
                <li><a href="pemesanan.php">Pemesanan</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="order-form">
        <form action="process_order.php" method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="mobil">Pilih Mobil</label>
            <select id="mobil" name="mobil">
                <option value="mobil1">Mobil 1</option>
                <option value="mobil2">Mobil 2</option>
            </select>

            <label for="tanggal_mulai">Tanggal Mulai Sewa</label>
            <input type="date" id="tanggal_mulai" name="tanggal_mulai" required>

            <label for="tanggal_selesai">Tanggal Selesai Sewa</label>
            <input type="date" id="tanggal_selesai" name="tanggal_selesai" required>

            <button type="submit">Kirim Pemesanan</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Bendicar | Semua hak dilindungi</p>
    </footer>
</body>
</html>