@extends('layouts.app', ['title' => 'Data Nilai Siswa'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Nilai Siswa</h4>
            </div>

            <div class="card-body">
                <form action="" class="form-inline" style="display: inline;">
                    <select name="thn" id="thn" class="form-control mb-3">
                        <option>-- Pilih Tahun --</option>
                        <option {{ request('thn') == 'semua' ?  'selected' : '' }} value="semua">Semua</option>
                        <option {{ request('thn') == '2021' ?  'selected' : '' }} value="2021">2021</option>
                        <option {{ request('thn') == '2022' ?  'selected' : '' }} value="2022">2022</option>
                        <option {{ request('thn') == '2023' ?  'selected' : '' }} value="2023">2023</option>
                    </select>

                    <button type="submit" class="btn btn-primary mb-3">Pilih</button>
                    <a href="{{ route('nilai.export') }}?thn={{ request('thn') }}" class="btn btn-primary mb-3">Export Nilai</a>
                    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalImport">
                        Import Nilai
                    </button>
                </form>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th width="20px" class="text-center">No</th>
                            <th>Nisn</th>
                            <th>Nama Siswa</th>
                            <th width="20px">Rata - Rata</th>
                            <th>Status</th>
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
                            <td class="text-center">{{ $sis->nilai ? $sis->nilai->rata : '0' }}</td>
                            <td class="text-center">
                                <span class="badge {{ $sis->status == 1 ? 'bg-success' : '' }} {{ $sis->status == 0 ? 'bg-danger' : '' }}  {{ $sis->status == 2 ? 'bg-warning' : '' }} text-white">{{ $sis->status == 1 ? 'Lulus' : '' }} {{ $sis->status == 0 ? 'Tidak Lulus' : '' }} {{ $sis->status == 2 ? 'Hubungi Wali Kelas' : '' }}</span>
                            </td>
                            <td>
                                <a href="{{ route('siswa.print', $sis->id) }}" class="btn btn-info"><i class="fas fa-download"></i> Download</a>
                                <a href="{{ route('nilai.input', $sis->id) }}" class="btn btn-success"><i class="fas fa-pen"></i> Input Nilai</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Import Nilai Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('nilai.import') }}" method="post" enctype="multipart/form-data">
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
@stop