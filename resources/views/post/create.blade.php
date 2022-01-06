@extends('layouts.app')

@section('title', 'Buat Post Baru')

@section('content')
<div class="wrapper">
    <h1>Buat Post Baru</h1>

    @if (session('success'))
    <div class="alert-success">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('home') }}">
        @csrf
        <input name="title" type="text" placeholder="Title...">
        <input name="body" type="text" placeholder="Body...">
        <button class="btn-blue">Submit</button>
        <button style="width: 10%; color:white;" class="btn-green"><a href="{{ route('home.index') }}">Kembali</a></button>
    </form>

</div>
@endsection