@extends('layout.main')
{{-- @extends('admin.layout.main') --}}

@section('container')
    <br>
    <br>
    <div class="d-flex justify-content-center">
        <h1 align="center" class="text-light">Welcome back, <span style="color: #34C6DA">{{ auth()->user()->name }}</span> ! We're glad to see you here.</h1>
    </div>
@endsection
