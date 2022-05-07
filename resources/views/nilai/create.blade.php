@extends('layouts.app', ['title' => 'Input Nilai Siswa'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Nilai Siswa</h4>
            </div>

            <div class="card-body">
                <form class="form-sample" action="{{ route('nilai.insert', $siswa->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">

                                <label class="col-sm-6 col-form-label" for="pabp">PABP</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="pabp" id="pabp" value="{{ $siswa->nilai ? $siswa->nilai->pabp : old('pabp') }}">

                                    @error('pabp')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="ppkn">PPKN</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="ppkn" id="ppkn" value="{{ $siswa->nilai ? $siswa->nilai->ppkn : old('ppkn') }}">

                                    @error('ppkn')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="bind">B. Indonesia</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="bind" id="bind" value="{{ $siswa->nilai ? $siswa->nilai->bind : old('bind') }}">

                                    @error('bind')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="matematika">Matematika</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="mtk" id="matematika" value="{{ $siswa->nilai ? $siswa->nilai->mtk : old('mtk') }}">

                                    @error('mtk')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="si">Sej. Indonesia</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="si" id="si" value="{{ $siswa->nilai ? $siswa->nilai->si : old('si') }}">

                                    @error('si')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="bing">B. Inggris</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="bing" id="bing" value="{{ $siswa->nilai ? $siswa->nilai->bing : old('bing') }}">

                                    @error('bing')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="sn">Seni Budaya</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="sn" id="sn" value="{{ $siswa->nilai ? $siswa->nilai->sn : old('sn') }}">

                                    @error('sn')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="pjok">Pjok</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="pjok" id="pjok" value="{{ $siswa->nilai ? $siswa->nilai->pjok : old('pjok')}}">

                                    @error('pjok')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="bs">PKWU</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="bs" id="bs" value="{{ $siswa->nilai ? $siswa->nilai->bs : old('bs') }}">

                                    @error('bs')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="fisika">{{ $siswa->jurusan == 'ipa' ? 'Fisika' : 'Ekonomi' }} </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="fisika" id="fisika" value="{{ $siswa->nilai ? $siswa->nilai->fisika : old('fisika')}}">

                                    @error('fisika')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="kimia">{{ $siswa->jurusan == 'ipa' ? 'Kimia' : 'Sosiologi' }} </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="kimia" id="kimia" value="{{ $siswa->nilai ? $siswa->nilai->kimia : old('kimia')}}">

                                    @error('kimia')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="plh">{{ $siswa->jurusan == 'ipa' ? 'Biologi' : 'Geografi' }} </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="plh" id="plh" value="{{ $siswa->nilai ? $siswa->nilai->plh : old('plh') }}">

                                    @error('plh')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="c2">{{ $siswa->jurusan == 'ipa' ? 'Matematika IPA' : 'Sejarah' }} </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="c2" id="c2" value="{{ $siswa->nilai ? $siswa->nilai->c2 : old('c2') }}">

                                    @error('c2')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label" for="c3">{{ $siswa->jurusan == 'ipa' ? 'Ekonomi' : 'Biologi' }} </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="c3" id="c3" value="{{ $siswa->nilai ? $siswa->nilai->c3 : old('c3') }}">

                                    @error('c3')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Input</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop