<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="style1.css" rel="stylesheet">
<head>
<Body>
    <div class="content">
<div class="inputan">
    <form action="insert.php"method = "post">
        <div class="inputan">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Input Nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor KTP</label>
                <input type="text" name="No_KTP" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Input Nomor KTP">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nomor SIM</label>
                <input type="text" name="No_SIM" class="form-control" id="exampleInputPassword1" placeholder="Input Nomor SIM">
                <br>
            </div>
            <input type="date" name="Tgl_Lahir"><br>
            Kota domisili <br>
            <select name="Kode_kota">
                <option value=""></option>
                <option value="01">Jogja</option>
                <option value="02">Jakarta</option>
                <option value="03">Surabaya</option>
            </select> <br><br>
            <button type="submit" class="btn btn-primary">Submit</button> <br>
            <a href="latihan4.php">Cek Database</a>
        </div>
    </form>
    </div>
    </div>
</Body>
</head>
</html>