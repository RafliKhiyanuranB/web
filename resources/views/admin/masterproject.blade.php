@extends('admin.admin')
@section('title', 'Master Project')
@section('content')
<div class="row">
    <div class="col-lg-5">
        <div class="card shadow">
            <div class="card-header">
                <h5 class="mb-0">Data Siswa</h5>
            </div>
            <div class="card-body">
                <table class="card-body">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $siswa->name }}</td>
                            <td>
                                <a onclick="getProject ({{ $siswa->id }})" class="btn btn-sm btn-info">
                                    <i class="fas fa-folder-open"></i>
                                </a>
                                <a href="{{ route("project.create", $siswa->id)}}" class="btn btn-sm btn-succes">
                                    <i class="fas fa-folder-plus"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card shadow">
            <div class="card-header">
                <h6>Data Project</h6>
            </div>
            <div id="project" class="card-body">
                <h6 class="text-center">Silahkan Pilih siswa terlebih dahulu</h6>
            </div>
        </div>
    </div>
</div>

<script lang="js">
    function getProject(id){
        $.get(`http://localhost:8000/admin/project/${id}`, (data)=> {
            $("#project").html(data);
        })
    }
</script>
@endsection