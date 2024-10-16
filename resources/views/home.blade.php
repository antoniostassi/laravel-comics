@extends('layouts.app')

@section('website-title', 'Home')

@section('main-content')

    @section('header-content')

        <div class="w-100 bg-primary text-white px-5" style="height:30px;">
            <div class="container d-flex justify-content-end pt-1">
                <p class="me-5">DC POWER VISA</p>
                <p>ADDITIONAL DC SITES</p>
            </div>
        </div>

        <div class="nav-bar w-100 py-3">
            <div class="container d-flex justify-content-between align-items-center">
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
        <div class="jumbotron w-100"></div>

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

        <div class="w-100" style="background-color:#1C1C1C">
            <div class="container pb-3">
            
                <div class="area-title bg-primary px-4 py-2">
                    <h5 class="text-white mt-1"><strong>CURRENT SERIES</strong></h5>
                </div>
                <div class="row">
                    @foreach ($comics as $singleItem)
                        <div class="col-2 text-white mb-4">
                            <div class="serie-thumb">
                                
                                <img src="{{$singleItem['thumb']}}" alt="{{$singleItem['title']}}">
                            </div>
                            <?php 
                                $title = $singleItem['title'];
                                $title = strtoupper($title);
                            ?>
                            <h6 class="mt-2">{{$title}}</h6>
                        </div>
                    @endforeach
                </div>

                <div class="btn btn-primary px-5 mt-5"><strong>LOAD MORE</strong></div>
                
            </div>
        </div>

        <section>
            <div class="w-100 bg-primary">
                <div class="container py-5">
                    <ul class="d-flex text-white gap-4 justify-content-between">
                        <li>DIGITAL COMICS</li>
                        <li>DIGITAL COMICS</li>
                        <li>DIGITAL COMICS</li>
                        <li>DIGITAL COMICS</li>
                        <li>DIGITAL COMICS</li>
                    </ul>
                </div>
            </div>
        </section>
    
        <style lang="scss">
            .area-title {
                position:relative;
                bottom:30px;
                max-width:fit-content;
            }

            .btn.btn-primary {
                border-radius:0px; 
                font-size:0.8rem; 
                width:fit-content;
                display:block;
                margin:0 auto;
            }
            
            .serie-thumb {
                width:210px;
                height:210px;
                &> img {
                    width:100%;
                    height:100%;
                    object-fit:cover;
                    object-position:top;
                }
            }
            
        </style>

    @endsection