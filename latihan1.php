<html>

<head>

<body>
    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'penduduk');
    if ($koneksi) {
    }
    $pemanggil = mysqli_query($koneksi, "SELECT * FROM table_data_penduduk");
    ?>
    <h3>Table Data Penduduk</h3>
    <table border="1">
        <tr>
            <td>No KTP</td>
            <td>No SIM</td>
            <td>Nama</td>
            <td>Tangal Lahir</td>
            <td>Kode Kota</td>
        </tr>
    <?php
    while ($row=mysqli_fetch_array($pemanggil))
    {
        echo "<tr>";
        echo "<td>", $row['No_KTP'], "</td>";
        echo "<td>", $row['No_SIM'], "</td>";
        echo "<td>", $row['Nama'], "</td>";
        echo "<td>", $row['Tgl_Lahir'], "</td>";
        echo "<td>", $row['Kode_kota'], "</td>";
    }    
    ?>
    </table>
    </head>

</html>