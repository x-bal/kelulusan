@extends('layouts.app', ['title' => 'Data Admin'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Admin</h4>
            </div>

            <div class="card-body">
                <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Tambah Admin</a>
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
                        @foreach($admin as $adm)
                        <tr>
                            <td></td>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $adm->username }}</td>
                            <td>{{ $adm->name }}</td>
                            <td>
                                <a href="{{ route('admin.show', $adm->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> Show</a>
                                <a href="{{ route('admin.edit', $adm->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('admin.destroy', $adm->id) }}" method="post" style="display: inline;" class="delete-form">
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