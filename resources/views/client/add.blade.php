@extends('layout.client')

@section('title')
    {{$title}}
@endsection


@section('content')
    <h1>Them San Pham</h1>
    <form action="" method="POST">
        <input type="text" name="username">
        @csrf
        <button type="submit"> Submit</button>
    </form>
@endsection

@section('css')
    {{-- <style>
        header {
        background: plum
    }
    </style> --}}
    
@endsection