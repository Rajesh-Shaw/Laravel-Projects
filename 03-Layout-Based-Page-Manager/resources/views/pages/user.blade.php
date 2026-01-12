@extends('layouts.app')

@section('title', 'User Page')

@section('content')
    <h1>Hello, {{ $name }}</h1>
    <p>This is a dynamic user page.</p>
@endsection