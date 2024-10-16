@extends('layouts.app')

@section('website-title', 'Home')

@section('main-content')

    @section('header-content')

        <div class="w-100 bg-primary text-white px-5" style="height:20px;">
            <div class="container d-flex justify-content-end">
                <p class="me-5">DC POWER VISA</p>
                <p>ADDITIONAL DC SITES</p>
            </div>
        </div>

        <div class="nav-bar w-100 pt-3">
            <div class="container d-flex justify-content-center align-items-center">
                <img src="/images/dc-logo.png" alt="Logo">
                <ul class="d-flex">
                    <li><a href="">Characters</a></li>
                    <li><a href="">Characters</a></li>
                    <li><a href="">Characters</a></li>
                    <li><a href="">Characters</a></li>
                    <li><a href="">Characters</a></li>
                    <li><a href="">Characters</a></li>
                    <li><a href="">Characters</a></li>
                    <li><a href="">Characters</a></li>
                </ul>
                <input type="search" name="search" id="search" placeholder="Search">
            </div>
        </div>
        <div class="jumbotron w-100 border"></div>

        <style lang="scss">
            .container {
                p {
                    margin-top:2px;
                    font-size:0.7rem;
                    margin-right:20px;
                }
            }

            .jumbotron {
                height:400px;
                background-image: url('/images/jumbotron.jpg');
                background-position:top;
                background-size:cover;
            }
        </style>

    @endsection

    @section('main-content')

    @endsection

@endsection