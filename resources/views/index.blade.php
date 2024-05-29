<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDAF</title>
    <link rel="shortcut icon" href="component/Logo-Udinus-Official-02-1-3.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/boostrap.css">
</head>
<body>
<form action="/registrasi" method="POST">
@csrf
            <div class="card-body">
            <div class="fs-4 fw-bolder mb-3">REGRISTRASI MAHASISWA BARU</div>
            <div class="form-group cols-sm-6 my-2">
                <a href="/tabel" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Tabel Siswa</span>
                </a>
            </div>
            <label>Nama</label>
            <div class="mb-3">
                <input class="form-control" name="nama" type="text" required/>
            </div>
            <label>Asal Sekolah</label>
            <div class="mb-3">
                <input class="form-control" name="asal" type="text" required/>
            </div>
            <label>NIM</label>
            <div class="mb-3">
                <input class="form-control" name="nim" type="text" required/>
            </div>
            <label>No Telp</label>
            <div class="mb-3">
                <input class="form-control" name="telp" type="number" required/>
            </div>
            <label>Agama</label>
            <div class="mb-3">
                <select name="agama" class="form-control">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghucu">Konghucu</option>
                </select>
            </div>
            <label>Jenis Kelamin</label>
            <div class="mb-3">
                <div class="form-control">
                <input type="radio" name="jk" value="laki-laki"> Laki-Laki
                <input type="radio" name="jk" value="perempuan"> Perempuan
                </div>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid"><input type="submit" value="DAFTAR" class="bg-blue-500 btn btn-primary btn-block"></input></div>
            </div>
            </div>
        </form>
</body>
</html>