@extends('layouts.master')
@section('title')
    Halaman Welcome
@endsection

@section('content')
    <h1>Selamat Datang {{$fullname}}</h1>
    <p>{{$address}}</p>
@endsection