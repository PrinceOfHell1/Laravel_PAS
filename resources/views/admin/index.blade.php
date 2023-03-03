@extends('admin.layout.main')
@section('container')
    <h1 class="text-light">Hey <span style="color: #34C6DA;">{{ auth()->user()->name }}</span></h1>
    <h2 class="text-light mt-2">We're glad to see you in our admin system. WELCOME!</h2>
@endsection
