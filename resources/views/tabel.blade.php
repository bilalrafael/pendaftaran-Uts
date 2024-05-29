<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDAF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/boostrap.css">
</head>
<body>
<section>
<main>
    <div class="container-fluid px-4">
        <div class="mt-4 mb-4 fs-2 fw-bolder">Data Siswa yang Sudah Terdaftar</div>
        <div class="form-group cols-sm-6 my-2">
            <a href="/" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regristrasi Siswa</span>
            </a>    
        </div>
        <div class="card-body">
        <h6>NB : Indikator <b style="color: #dc3545;">Merah</b> Belum Diterima. Indikator <b style="color: #198754;">Hijau</b> Sudah Diterima </h6>
        <table id="example1" class="table table-bordered table-striped table-hover" style="text-align:center">
            <thead>
            <tr>
            <th colspan="2">No</th>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>NIS</th>
            <th>No Telepon</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Opsi</th>
            </tr>
            </thead>
            <?php $no=0 ;?>
            <tbody>
            @foreach ($d as $data)
            <tr>
                <td><?php echo ++$no?></td>
                <td>
                @if($data->status === 'belum')
                    <p style="background-color: #dc3545; border-radius: 100%; width:25px; color:#dc3545;">.</p>
                @else
                    <p style="background-color: #198754; border-radius: 100%; width:25px; color:#198754;">.</p>
                @endif
                </td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->asal }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->telp }}</td>
                <td>{{ $data->agama }}</td>
                <td>{{ $data->jk }}</td>
                <td>@if($data->status === 'belum')
                        Belum Diterima
                    @else
                        Sudah Diterima
                    @endif
                </td>
                <td class="d-flex">
                <form class="px-2" action="/delete/{{ $data->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if(session('success'))
                            <script>
                                alert("{{ session('success') }}");
                            </script>
                        @endif
                        <button type="submit" class="btn btn-danger btn-icon-split" onclick="return confirm('Anda yakin untuk menghapus Data Ini?')">
                            <span class="icon text-white-50">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/></svg>
                            </span>
                        </button>
                </form>
                <?php  
                    if($data['status'] == 'belum'){
                        ?>
                        <form class="px-2" action="/terima/{{ $data->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success btn-icon-split" onclick="return confirm('Anda yakin untuk Terima Siswa Ini?')">
                        <span class="text">Terima</span>
                        </button>
                </form>
                        <?php
                    }else{
                        ?>
                        <form class="px-2" action="/terima/{{ $data->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success btn-icon-split disabled" onclick="return confirm('Anda yakin untuk Terima Siswa Ini?')">
                        <span class="text">Terima</span>
                        </button>
                </form>
                        <?php
                    }
                    ?>
                    <?php  
                    if($data['status'] == 'selesai'){
                        ?>
                        <form class="px-2" action="/tolak/{{ $data->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-icon-split" onclick="return confirm('Anda yakin untuk Tolak Siswa Ini?')">
                        <span class="text">Tolak</span>
                        </button>
                        </form>
                        <?php
                    }else{
                        ?>
                        <form class="px-2" action="/tolak/{{ $data->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-icon-split disabled" onclick="return confirm('Anda yakin untuk Tolak Siswa Ini?')">
                        <span class="text">Tolak</span>
                        </button>
                        </form>
                        <?php
                    }
                    ?>
                </td> 
            </tr>
            </tbody>
            @endforeach
        </table>
        </div>
    </div>
</main>
</section>
</body>
</html>
