@extends('layouts.app', ['title' => 'Setting Login Siswa'])

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">Setting Download</h4>
                <input type="checkbox" value="{{ $download->id }}" id="download" {{ $download->status == 1 ? 'checked' : '' }}>
            </div>
        </div>
    </div>
    <div class="col-md-8">
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

<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#download').click(function() {
            var id = $(this).val();
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
            })
            if ($(this).is(':checked')) {
                var status = 1;
                $.ajax({
                    method: 'post',
                    url: '/download/' + id,
                    data: {
                        status: status
                    },
                    success: function(result) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Fitur Download berhasil diaktifkan'
                        })
                    }
                })
            } else {
                var status = 0;
                $.ajax({
                    method: 'post',
                    url: '/download/' + id,
                    data: {
                        status: status
                    },
                    success: function(result) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Fitur Download berhasil dinonaktifkan'
                        })
                    }
                })
            }
        });
    });
</script>
@stop