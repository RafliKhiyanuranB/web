<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Berita</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            position: relative;
            height: 300px; /* Sesuaikan tinggi header sesuai kebutuhan */
            overflow: hidden;
        }
        .header img {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .header h1 {
            color: white;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            color: #333;
        }
        .container p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('storage/' . $data->photo) }}" alt="Gambar Berita">
        <h1>Event Wibu</h1>
    </div>
    <div class="container">
        <h2>{{$data->name}}</h2>
        
        <p>
            {{$data->about}}
        </p>
        <p>
            Etiam congue et felis eget condimentum. Fusce bibendum tincidunt libero, ut vehicula nulla tincidunt at. Quisque id ullamcorper urna. Donec scelerisque, urna eu mattis scelerisque, turpis tortor facilisis odio, auctor dignissim nunc lorem ut elit.
        </p>
        <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
        <!-- Tambahkan detail berita sesuai kebutuhan -->
    </div>
</body>
</html>
