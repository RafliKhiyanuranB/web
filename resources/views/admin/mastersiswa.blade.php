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
                <button role="button" class="btn btn-danger deleteButton" >Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
      </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
  // Menangani klik tombol "Delete"
  $('.deleteButton').click(function (e) {
    e.preventDefault(); // Mencegah form dikirim secara langsung
    
    const form = $(this).closest('form'); // Find the nearest form element
    
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger mr-2'
      },
      buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
      title: 'Sudah Yakin?',
      text: "Perubahan tidak akan bisa dikembalikan",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yakin',
      cancelButtonText: 'Tidak',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Jika pengguna mengonfirmasi, kirim form penghapusan
        form.submit(); // Submit only the form associated with the clicked button
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
          'Dibatalkan',
          'Tidak ada perubahan terhadap data ini',
          'error'
        );
      }
    });
  });
});

  </script>
@endsection