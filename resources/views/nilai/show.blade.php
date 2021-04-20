@extends('layouts.app', ['title' => 'Detail Siswa'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Siswa</h4>
            </div>

            <div class="card-body">
                <form class="form-sample">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="nisn"><b>Nisn</b> </label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->nisn }}</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="nis"><b>Nis</b> </label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->nis }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="nama"><b>Nama</b> </label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->nama }}</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="nopes"><b>No Pes</b></label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->nopes }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="kelas"><b>Kelas</b></label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->kelas }}</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="jurusan"><b>Jurusan</b></label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->jurusan }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="tempat"><b>Tempat Lahir</b></label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->tempat }}</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3" for="tgl_lahir"><b>Tanggal Lahir</b></label>
                                <div class="col-sm-9">
                                    <p>{{ $siswa->tgl_lahir }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop