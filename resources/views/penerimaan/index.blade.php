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

</head>

<body>
    <!-- Button trigger modal -->

    <div class="container">

        <div class="card mt-5 p-5" style="border-radius: 16px;">
            <div class="card-content mb-2">
                <h5 class="text-center">Penerimaan Siswa Baru</h5>
            </div>
            <div class="card-content mb-2" style="display: flex;
            justify-content: end;
            ">
                <a href="/penerimaan/create" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah</a>
            </div>

            <table class="table">
                <thead style="background: #c4c4f4;">
                    <tr>
                        <th scope="col">NO PEND</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">BHS IND</th>
                        <th scope="col">BHS MTK</th>
                        <th scope="col">NO IPA</th>
                        <th scope="col"> TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penerimaan as $p)
                    <tr>
                        <th scope="row">{{ $p->no_pendaftaran }}</th>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->nilai_ind }}</td>
                        <td>{{ $p->nilai_mtk }}</td>
                        <td>{{ $p->nilai_ipa }}</td>
                        <td>{{ $p->nilai_ind + $p->nilai_mtk + $p->nilai_ipa }}</td>
                    </tr>
                    @endforeach
                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>


</html>