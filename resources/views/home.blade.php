@extends('layouts.app')

@section('title', 'Krisen-Ernie | Kostenfreier Onlinekurs zur richtigen Umgang mit Krisen.')

@section('vid-ernie', 'https://vimeo.com/76979871')
@section('vid-alle', 'https://vimeo.com/76979871')
@section('vid-unternehmer', 'https://vimeo.com/76979871')

@section('content')

    @include('components.home.start')
    @include('components.home.vid-alle')
    @include('components.home.vid-ernie')
    @include('components.home.vid-unternehmer')


    @include('components.home.counter')

@endsection
