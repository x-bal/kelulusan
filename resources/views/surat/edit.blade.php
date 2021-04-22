@extends('layouts.app', ['title' => 'Edit Data Surat'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data Surat</h4>
            </div>

            <div class="card-body">
                <form class="form-sample" action="{{ route('surat.update', $surat->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PAtCH')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="no_surat">No Surat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_surat" id="no_surat" value="{{ $surat->no_surat}}">

                                    @error('no_surat')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nama_surat">Nama Surat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_surat" id="nama_surat" value="{{ $surat->nama_surat }}">

                                    @error('nama_surat')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="sub_header">Sub Header</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sub_header" id="sub_header" value="{{ $surat->sub_header }}">

                                    @error('sub_header')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="header">Header</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="header" id="header" value="{{ $surat->header }}">

                                    @error('header')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="dinas">Nama Dinas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="dinas" id="dinas" value="{{ $surat->dinas }}">

                                    @error('dinas')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="alamat">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $surat->alamat }}">

                                    @error('alamat')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="kepala_sekolah">Nama Kepsek</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kepala_sekolah" id="kepala_sekolah" value="{{ $surat->kepala_sekolah }}">

                                    @error('kepala_sekolah')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nip">Nip</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nip" id="nip" value="{{ $surat->nip }}">

                                    @error('nip')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="tahun_ajaran">Tahun Ajaran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tahun_ajaran" id="tahun_ajaran" value="{{ $surat->tahun_ajaran }}">

                                    @error('tahun_ajaran')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="tempat_tanggal_surat">Tempat Tgl Surat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tempat_tanggal_surat" id="tempat_tanggal_surat" value="{{ $surat->tempat_tanggal_surat }}">

                                    @error('tempat_tanggal_surat')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="logo">Logo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="logo" id="logo" value="{{ old('logo') }}">

                                    @error('logo')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="ttd">Tanda Tangan</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="ttd" id="ttd" value="{{ old('ttd') }}">

                                    @error('ttd')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="stempel">Stempel</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" name="stempel" id="stempel" value="{{ old('stempel') }}">

                                    @error('stempel')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop