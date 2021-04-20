@extends('layouts.app', ['title' => 'Setting Login Siswa'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Setting Login Siswa</h4>
            </div>

            <div class="card-body">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalSetting">
                    Tambah Setting
                </button>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="20px" class="text-center">No</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th width="100px" class="text-center">Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($settings as $setting)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $setting->waktu }}</td>
                            <td>
                                <span class="badge {{ $setting->status == 1 ? 'bg-success' : 'bg-danger' }}  text-white">{{ $setting->status == 1 ? 'Active' : 'Nonactive' }}</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalStatus" onclick="changeStatus({{ $setting->id }})">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <form action="{{ route('setting.destroy', $setting->id) }}" method="post" style="display: inline;" class="delete-form">
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

<div class="modal fade" id="modalSetting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Setting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('setting.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input type="datetime-local" name="waktu" id="waktu" class="form-control waktu-upload-info">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Status Setting</h5>
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
                            <option value="1">Active</option>
                            <option value="0">Nonactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('footer')
<script>
    function changeStatus(id) {
        var act = "/setting/status/" + id;

        $("#target").attr("action", act)
    }
</script>
@stop