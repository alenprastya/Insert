<?php
$nama_user = $_POST['Nama'];
$no_KTP_user = $_POST['No_KTP'];
$no_SIM_user = $_POST['No_SIM'];
$no_Tgl_Lahir_user = $_POST['Tgl_Lahir'];
$no_Kode_kota_user = $_POST['Kode_kota'];

$koneksi = mysqli_connect('localhost', 'root', '', 'penduduk');
mysqli_query($koneksi, "INSERT INTO table_data_penduduk VALUES ('$no_KTP_user','$no_SIM_user','$nama_user','$no_Tgl_Lahir_user','$no_Kode_kota_user')");
mysqli_close($koneksi);

echo "databse penduduk Telah ditambahkan : ";
echo "<br/>";
echo "Nama : $nama_user";
echo "<br/>";
echo "Nomor Ktp : $no_KTP_user";
echo "<br/>";
echo "Nomor Sim : $no_SIM_user";
echo "<br/>";
echo "Tanggal Lahir : $no_Tgl_Lahir_user";
echo "<br/>";
echo "Kota Domisili : ";

switch ($no_Kode_kota_user) 
{
    case "01":
        echo "jogja";
        break;
    case "02":
        echo "Jakarta";
        break;
    case "03":
        echo"Surabaya";
        break;
    default: 
    echo ("kode Kota tidak ditemukan");
}
?>