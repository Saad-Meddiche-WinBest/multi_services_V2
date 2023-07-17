@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-header">{{ __('Cities') }}</div>
                    <div class="card-body">
                        <section class="section bg-light">
                            <div class="container">
                                <div class="row align-items-stretch retro-layout">
                                    <div class="col-md-4">
                                        <a href="single.html" class="h-entry mb-30 v-height gradient">

                                            <div class="featured-img"
                                                style="background-image: url('images/img_2_horizontal.jpg');"></div>

                                            <div class="text">
                                                <span class="date">Apr. 14th, 2022</span>
                                                <h2>AI can now kill those annoying cookie pop-ups</h2>
                                            </div>
                                        </a>
                                        <a href="single.html" class="h-entry v-height gradient">

                                            <div class="featured-img"
                                                style="background-image: url('images/img_5_horizontal.jpg');"></div>

                                            <div class="text">
                                                <span class="date">Apr. 14th, 2022</span>
                                                <h2>Don’t assume your user data in the cloud is safe</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="single.html" class="h-entry img-5 h-100 gradient">

                                            <div class="featured-img"
                                                style="background-image: url('images/img_1_vertical.jpg');"></div>

                                            <div class="text">
                                                <span class="date">Apr. 14th, 2022</span>
                                                <h2>Why is my internet so slow?</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="single.html" class="h-entry mb-30 v-height gradient">

                                            <div class="featured-img"
                                                style="background-image: url('images/img_3_horizontal.jpg');"></div>

                                            <div class="text">
                                                <span class="date">Apr. 14th, 2022</span>
                                                <h2>Startup vs corporate: What job suits you best?</h2>
                                            </div>
                                        </a>
                                        <a href="single.html" class="h-entry v-height gradient">

                                            <div class="featured-img"
                                                style="background-image: url('images/img_4_horizontal.jpg');"></div>

                                            <div class="text">
                                                <span class="date">Apr. 14th, 2022</span>
                                                <h2>Thought you loved Python? Wait until you meet Rust</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Categories') }}</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, ab. Deleniti a voluptates beatae
                        expedita doloribus dolorem temporibus, ipsum necessitatibus enim ipsam omnis ea, esse totam est sint
                        pariatur vitae!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
