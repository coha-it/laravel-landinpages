@extends('layouts.app')

@section('title', 'Krisen-Ernie | Kostenfreier Onlinekurs zur richtigen Umgang mit Krisen.')

@section('content')

    @include('components.home.start')
    @include('components.home.alle')


    @include('components.home.counter')

@endsection
