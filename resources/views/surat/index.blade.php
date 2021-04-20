@extends('layouts.app', ['title' => 'Data Surat Kelulusan'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Surat Kelulusan</h4>
            </div>

            <div class="card-body">
                <a href="{{ route('surat.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th width="20px" class="text-center">No</th>
                            <th>Logo</th>
                            <th>No Surat</th>
                            <th>Nama Surat</th>
                            <th width="50px" class="text-center">Status</th>
                            <th width="100px" class="text-center">Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($surat as $srt)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('/storage/'. $srt->logo)  }}" alt="" width="100px"></td>
                            <td>{{ $srt->no_surat }}</td>
                            <td>{{ $srt->nama_surat }}</td>
                            <td class="text-center">
                                <span class="badge  {{ $srt->status == 1 ? 'bg-success' : 'bg-danger' }} text-white">{{ $srt->status == 1 ? 'Acitve' : 'Nonactive' }}</span>
                            </td>
                            <td>
                                <a href="{{ route('surat.edit', $srt->id) }}" class="btn btn-primary"><i class="fas fa-check"></i></a>
                                <a href="{{ route('surat.edit', $srt->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('surat.destroy', $srt->id) }}" method="post" style="display: inline;" class="delete-form">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
@stop