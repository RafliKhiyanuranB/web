@extends('admin.admin')
@section('title', 'Master Siswa')
@section('mastersiswa')

<div class="card">
    <div class="card-body">
        @if (count($errors) > 0) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('send') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Nama</label>
                    <input class="form-control" name="name" type="text" id="name" placeholder="Masukkan Nama Kamu" required>
                </div>
                <div class="col-md-6">
                    <label for="about">About</label>
                    <input class="form-control" name="about" type="text" placeholder="About You" required>
                </div>
                <div class="col-12">
                    <label for="photo">Foto</label>
                    <input class="form-control" name="photo" type="file" required>
                </div>
                
                <div class="card-body">
                    <div class="button">
                        <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                        <a href="./mastersiswa" class="btn btn-light" role="button" aria-pressed="true">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
