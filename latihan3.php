<html>

<head>
    <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>

<body>
    <h2>db Alen Prastya</h2>
    <br />
    <table border="1">
        <tr>
            <th>No. KTP</th>
            <th>No. SIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Kode Kota</th>
            <th>pilihan</th>

        </tr>
        <?php
        $koneksi = mysqli_connect('localhost', 'root', '', 'penduduk');
        if ($koneksi) {
            echo 'Koneksi PHP dan mysql Berhasil';
        } else {
            echo 'koneksi Database Gagagl';
        }
        echo "<br><br>";
        $panggil_db = mysqli_query($koneksi, "SELECT * FROM table_data_penduduk");
        while ($d = mysqli_fetch_array($panggil_db)) {
        ?>

        <tr>
            <td><?php echo $d['No_KTP']; ?></td>
            <td><?php echo $d['No_SIM']; ?></td>
            <td><?php echo $d['Nama']; ?></td>
            <td><?php echo $d['Tgl_Lahir']; ?></td>
            <td><?php echo $d['Kode_kota']; ?></td>
            <td>
                <a href="franchise.php">EDIT</a>
            </td>
        </tr>
        <?php
        }
        ?>

    </table>
    <br>
    <br><a href="latih.php">+ TAMBAH MAHASISWA</a>
</body>
</head>

</html>