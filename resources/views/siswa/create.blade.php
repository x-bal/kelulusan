@extends('layouts.app', ['title' => 'Tambah Siswa'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Siswa</h4>
            </div>

            <div class="card-body">
                <form class="form-sample" action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nisn">Nisn</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nisn" id="nisn" value="{{ old('nisn') }}">

                                    @error('nisn')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nis">Nis</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nis" id="nis" value="{{ old('nis') }}">

                                    @error('nis')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nama">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">

                                    @error('nama')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="nopes">No Pes</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nopes" id="nopes" value="{{ old('nopes') }}">

                                    @error('nopes')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="kelas">Kelas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kelas" id="kelas" value="{{ old('kelas') }}">

                                    @error('kelas')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="jurusan">Jurusan</label>
                                <div class="col-sm-9">
                                    <select name="jurusan" id="jurusan" class="form-control">
                                        <option disabled selected>-- Pilih Jurusan --</option>
                                        <option value="ipa">IPA</option>
                                        <option value="ips">IPS</option>
                                    </select>

                                    @error('jurusan')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="tempat">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tempat" id="tempat" value="{{ old('tempat') }}">

                                    @error('tempat')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir') }}">

                                    @error('tgl_lahir')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="thn">Tahun Lulus</label>
                                <div class="col-sm-9">
                                    <select name="thn_lulus" id="thn" class="form-control">
                                        <option disabled selected>-- Pilih Tahun --</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>

                                    @error('thn_lulus')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop