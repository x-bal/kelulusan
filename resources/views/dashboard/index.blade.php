@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4>Selamat Datang, {{ auth()->user()->name }}</h4>
                <p>Have a nice day :)</p>
            </div>
        </div>
    </div>
</div>
@stop