@extends('layouts.app', ['title' => 'Detail Guru'])

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Guru</h4>
            </div>

            <div class="card-body">
                <form class="form-sample">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3" for="username"><b>Username</b> </label>
                                <div class="col-sm-9">
                                    <p>{{ $guru->username }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3" for="username"><b>Nama</b> </label>
                                <div class="col-sm-9">
                                    <p>{{ $guru->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3" for="username"><span class="badge bg-success p-1 text-white">{{ $guru->level }}</span></label>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop