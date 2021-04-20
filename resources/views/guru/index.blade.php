@extends('layouts.app', ['title' => 'Data Guru'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Guru</h4>
            </div>

            <div class="card-body">
                <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th width="20px" class="text-center">No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th width="100px" class="text-center">Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($guru as $gr)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $gr->username }}</td>
                            <td>{{ $gr->name }}</td>
                            <td>
                                <a href="{{ route('guru.show', $gr->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> Show</a>
                                <a href="{{ route('guru.edit', $gr->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('guru.destroy', $gr->id) }}" method="post" style="display: inline;" class="delete-form">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
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