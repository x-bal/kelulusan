@extends('layouts.app', ['title' => 'Data Siswa'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Siswa</h4>
            </div>

            <div class="card-body">
                <form action="" class="form-inline" style="display: inline;">
                    <select name="thn" id="thn" class="form-control mb-3">
                        <option>-- Pilih Tahun --</option>
                        <option value="semua">Semua</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>

                    <button type="submit" class="btn btn-primary mb-3">Pilih</button>
                </form>
                <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalImport">
                    Import Siswa
                </button>
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalExport">
                    Export Siswa
                </button>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th width="20px" class="text-center">No</th>
                            <th>Nisn</th>
                            <th>Nama Siswa</th>
                            <th class="text-center">Tahun Lulus</th>
                            <th class="text-center">Status</th>
                            <th width="100px" class="text-center">Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($siswa as $sis)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $sis->nisn }}</td>
                            <td>{{ $sis->nama }}</td>
                            <td class="text-center">{{ $sis->thn_lulus }}</td>
                            <td class="text-center">
                                <span class="badge {{ $sis->status == 1 ? 'bg-success' : '' }} {{ $sis->status == 0 ? 'bg-danger' : '' }}  {{ $sis->status == 2 ? 'bg-warning' : '' }} text-white">{{ $sis->status == 1 ? 'Lulus' : '' }} {{ $sis->status == 0 ? 'Tidak Lulus' : '' }} {{ $sis->status == 2 ? 'Hubungi Wali Kelas' : '' }}</span>
                            </td>
                            <td>
                                <!-- <a href="{{ route('siswa.show', $sis->id) }}" class="btn btn-primary" onclick="changeStatus()"><i class="fas fa-check"></i></a>
                                 -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalStatus" onclick="changeStatus({{ $sis->id }})">
                                    <i class="fas fa-check"></i>
                                </button>
                                <a href="{{ route('siswa.show', $sis->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('siswa.edit', $sis->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('siswa.destroy', $sis->id) }}" method="post" style="display: inline;" class="delete-form">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalImport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('siswa.import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file">Pilih File</label>
                        <input type="file" name="excel" id="file" class="form-control file-upload-info">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Export Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('siswa.export') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tahun">Tahun Lulus</label>
                        <select name="thn_lulus" id="tahun" class="form-control">
                            <option disabled selected>-- Pilih Tahun Lulus --</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Export</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="target">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="status">Pilih Status</label>
                        <select name="status" id="status" class="form-control">
                            <option disabled selected>-- Pilih Status --</option>
                            <option value="0">Tidak Lulus</option>
                            <option value="1">Lulus</option>
                            <option value="2">Hubungi Wali Kelas</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('footer')
<script>
    function changeStatus(id) {
        var act = "/siswa/status/" + id;

        $("#target").attr("action", act)
    }
</script>
@stop