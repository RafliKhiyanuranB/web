@extends('admin.admin')
@section('title', 'Master Siswa')
@section('content', 'Master Siswa')
@section('mastersiswa')

<div class="card">
    <div class="card-header">
        <a href="{{ route('tambahsiswa') }}" class="btn btn-primary" role="button" aria-pressed="true">Tambah</a>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <th>No</th>
          <th>Nama</th>
          <th>About</th>
          <th>Foto</th>
          <th>Aksi</th>
        </thead>
        @foreach ($siswas as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->about }}</td>
            <td><img width="100" src="{{ asset('storage/' . $item->photo) }}" alt=""></td>
            <td>
              <a href="{{ route('editsiswa', $item) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('destroys', ['id' => $item->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Siswa?')">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
      </table>
    </div>
</div>

<style>

</style>

@endsection