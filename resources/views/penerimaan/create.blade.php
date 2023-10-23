<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .error {
            color: red;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="card mt-5 p-5" style="border-radius: 16px;">
            <div class="card-content mb-2">
                <h5 class="text-center">Penerimaan Siswa Baru</h5>
            </div>


            <form action="{{ route('penerimaan.add') }}" method="POST">
                @csrf
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <div class="form-group">
                    <label for="">Nama</label>
                    <input name="nama" placeholder="Masukkan Nama" type="text" class="form-control" id="">
                    <span class="error">{{ $errors->first('nama') }}</span>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input name="alamat" placeholder="Masukkan Alamat" type="text" class="form-control" id="">
                    <span class="error">{{ $errors->first('alamat') }}</span>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input name="tanggal_lahir" placeholder="Masukkan Alamat" type="date" class="form-control" id="">
                    <span class="error">{{ $errors->first('tanggal_lahir') }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Gender</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <span class="error">{{ $errors->first('jenis_kelamin') }}</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Asal Sekolah</label>
                    <input name="asal_sekolah" placeholder="Masukkan Asal Sekolah" type="text" class="form-control" id="">
                    <span class="error">{{ $errors->first('asal_sekolah') }}</span>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                        <option value="islam">Islam</option>
                        <option value="protestan">Protestan</option>
                        <option value="katholik">Katholik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                    <span class="error">{{ $errors->first('agama') }}</span>
                </div>
                <div class="form-group">
                    <label for="">Nilai Indo</label>
                    <input name="nilai_ind" placeholder="Masukkan Nilai" type="number" class="form-control" id="">
                    <span class="error">{{ $errors->first('nilai_ind') }}</span>
                </div>
                <div class="form-group">
                    <label for="">Nilai Ipa</label>
                    <input name="nilai_ipa" placeholder="Masukkan Nilai" type="number" class="form-control" id="">
                    <span class="error">{{ $errors->first('nilai_ipa') }}</span>
                </div>
                <div class="form-group">
                    <label for="">Nilai MTK</label>
                    <input name="nilai_mtk" placeholder="Masukkan Nilai" type="number" class="form-control" id="">
                    <span class="error">{{ $errors->first('nilai_mtk') }}</span>
                </div>




                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>


</html>