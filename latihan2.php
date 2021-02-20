<html>

<head>

<body>

    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'penduduk');
    if ($koneksi) {
        echo 'Koneksi PHP dan mysql Berhasil';
    } else {
        echo 'koneksi Database Gagagl';
    }
    
    echo "<br><br>";
    
    $panggil_db = mysqli_query($koneksi, "SELECT * FROM table_data_penduduk");
    echo "Tabel data penduduk";

    
    echo "<br>";
    echo "<br>";
    
    $baris_db = mysqli_fetch_row($panggil_db);
    echo "$baris_db[0] $baris_db[1] $baris_db[2] $baris_db[3] ";
    echo "<br>";

    $baris_db = mysqli_fetch_row($panggil_db);
    echo "$baris_db[0] $baris_db[1] $baris_db[2] $baris_db[3] ";
    echo "<br>";

    $baris_db = mysqli_fetch_row($panggil_db);
    echo "$baris_db[0] $baris_db[1] $baris_db[2] $baris_db[3] ";
    echo "<br>";
    ?>
</body>
</head>

</html>