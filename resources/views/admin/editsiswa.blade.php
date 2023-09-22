@extends('admin.admin')
@section('title', 'Edit Siswa')
@section('content')

<div class="card">
    <div class="card-body">
        <form action="{{ route('editsiswaprocess', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <label for="name">Nama</label>
                    <input class="form-control" name="name" type="text" id="name" placeholder="Masukkan Nama Kamu" value="{{ $data->name }}" required>
                </div>
                <div class="col-md-6">
                    <label for="about">About</label>
                    <input class="form-control" name="about" type="text" placeholder="About You" value="{{ $data->about }}" required>
                </div>
                <div class="col-12">
                    <label for="photo">Foto</label>
                    <input class="form-control" name="photo" type="file">
                    <img src="{{ asset('storage/' . $data->photo) }}" alt="Siswa Photo" width="100">
                </div>

                <div class="card-body">
                    <div class="button">
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="{{route('mastersiswa')}}" class="btn btn-light" role="button" aria-pressed="true">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
