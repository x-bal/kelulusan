@extends('layouts.app', ['title' => 'Data Nilai Siswa'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Nilai Siswa</h4>
            </div>

            <div class="card-body">
                <!-- <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a> -->
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
@stop