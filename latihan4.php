<html>
<link href="style.css" rel="stylesheet">

<head>

<body>

    <div class="container">
        <?php
    $koneksi = mysqli_connect('localhost','root','','penduduk');
    $panggil = mysqli_query($koneksi, "SELECT * FROM table_data_penduduk");
    ?>
        <table border="2">
            <tr>
                <td>No Ktp</td>
                <td>No Sim</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Kode Kota</td>
            </tr>
            <?php
    while ($baris = mysqli_fetch_array($panggil))
    {
        echo "<tr>";
        echo "<td>", $baris['No_KTP'],"</td>";
        echo "<td>", $baris['No_SIM'],"</td>";
        echo "<td>", $baris['Nama'],"</td>";
        echo "<td>", $baris['Tgl_Lahir'],"</td>";
        echo "<td>", $baris['Kode_kota'],"</td>";
        echo "<?tr>";

    }
    

        ?>

</body>
</head>

</html>