<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- CSS LAINNYA -->
    <style>
        .jumbotron {
            padding: 6rem 1rem;
            background: #3498db; /* Warna latar belakang yang baru */
            color: white; /* Warna teks yang sesuai */
        }

        body {
            background: #f8f9fa; /* Warna latar belakang body */
        }

        .card {
            margin-bottom: 20px; /* Ruang antara kartu */
        }
    </style>

    <title>Tugas Portofolio</title>
</head>
<body id="home">
    @include('Navbar')
    <div class="container"> <!-- Tambahkan container Bootstrap -->
        {{-- @include('Hiro') --}}
        <div class="row">
            @foreach ($data as $item)
            {{-- {{$item}} --}}
            <div class="col-md-4"> <!-- Mengatur kartu dalam grid -->
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">jenis event</h6> <!-- Ganti dengan jenis event yang sesuai -->
                        <p class="card-text">{{$item->about}}</p>
                        <img src="{{ asset('storage/' . $item->photo) }}" alt="" class="img-fluid"> <!-- Menggunakan class img-fluid untuk gambar responsif -->
                        <a href="{{ route('detail', $item) }}" class="btn btn-success mt-3">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- @include('Footer') --}}
    </div>
</body>
</html>
