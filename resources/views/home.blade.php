@extends('layouts.app')

@section('website-title', 'Home')

@section('main-content')

    @section('header-content')
        @include('partials.header')
        @include('home.jumbotron')
    @endsection


    @section('main-content')
        @include('home.currentSeries')
        @include('home.servicesList')
    @endsection

    @section('footer-conter')
        @include('partials.footer')
    @endsection