@extends('layouts.app')

@section('title', 'Dreamteam Survey')

@section('content')

    @include('components.home.top')
    @include('components.home.references')
    @include('components.home.video')
    @include('components.home.details2')
    @include('components.home.people')
    @include('components.home.download')

@endsection
