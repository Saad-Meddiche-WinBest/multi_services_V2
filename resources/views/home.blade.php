@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {{-- Cities --}}
                <div class="card mb-5">
                    <div class="card-header">{{ __('Cities') }}</div>
                    <div class="card-body">
                        <section class="section bg-light">
                            <div class="container">
                                <div class="row align-items-stretch retro-layout justify-content-center">
                                    @foreach ($topCities as $citie)
                                        <div class="col-md-4 mb-4">
                                            <a class="card text-decoration-none text-dark h-100"
                                                href="{{ route('societiesByCitie.index', $citie->id) }}">

                                                <img src="{{ $citie->image }}" alt=""
                                                    class="card-img-top img-fluid">

                                                <div class="card-body d-flex flex-column">
                                                    <h2 class="card-title">{{ $citie->name }}</h2>

                                                    <div class="card-text mt-auto">
                                                        With More Than: {{ $citie->societies_count }} Societies
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                        </section>
                    </div>
                </div>

                {{-- Categories --}}
                <div class="card mb-5">
                    <div class="card-header">{{ __('Categories') }}</div>
                    <div class="card-body">
                        <section class="section bg-light">
                            <div class="container">
                                <div class="row align-items-stretch retro-layout justify-content-center">
                                    @foreach ($categories as $categorie)
                                        <div class="col-md-4 mb-4">
                                            <a class="card text-decoration-none text-dark h-100"
                                                href="{{ route('societiesByCategory.index', $categorie->id) }}">

                                                <img src="{{ $categorie->image }}" alt=""
                                                    class="card-img-top img-fluid">

                                                <div class="card-body d-flex flex-column">
                                                    <h2 class="card-title">{{ $categorie->name }}</h2>

                                                    <div class="card-text mt-auto">
                                                        {{ $categorie->demi_categories_count }}
                                                        Demi-Categories
                                                        <br>
                                                        &&
                                                        <br>
                                                        {{ $categorie->societies_count }} Societies
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </section>
                    </div>
                </div>

                {{-- Premium Societies --}}
                <div class="card mb-5">
                    <div class="card-header">{{ __('Premium Societies') }}</div>
                    <div class="card-body">
                        <section class="section bg-light">
                            <div class="container">
                                <div class="row align-items-stretch retro-layout justify-content-center">
                                    @foreach ($premiumSocieties as $societie)
                                        <div class="card col-md-6 col-lg-4 m-4" style="width: 18rem;">
                                            <img src="{{ $societie->image }}" class="card-img-top pt-3" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $societie->title }}</h5>
                                                {{-- <p class="card-text">{{ $societie->description }}</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><b>Link :</b> <a
                                                        href="{{ $societie->web_link }}">{{ $societie->web_link }}</a>
                                                </li>
                                                <li class="list-group-item"><b>Adress :</b> {{ $societie->adress }}</li>
                                                <li class="list-group-item"><b>Phone :</b> {{ $societie->telephone }}</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="{{ route('societie.show', $societie->id) }}"
                                                    class="card-link"><button>Details</button></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                {{-- New Societies --}}
                <div class="card">
                    <div class="card-header">{{ __('New Societies') }}</div>
                    <div class="card-body">
                        <section class="section bg-light">
                            <div class="container">
                                <div class="row align-items-stretch retro-layout justify-content-center">
                                    @foreach ($societies as $societie)
                                        <div class="card col-md-6 col-lg-4 m-4" style="width: 18rem;">
                                            <img src="{{ $societie->image }}" class="card-img-top pt-3" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $societie->title }}</h5>
                                                {{-- <p class="card-text">{{ $societie->description }}</p> --}}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><b>Link :</b> <a
                                                        href="{{ $societie->web_link }}">{{ $societie->web_link }}</a>
                                                </li>
                                                <li class="list-group-item"><b>Adress :</b> {{ $societie->adress }}</li>
                                                <li class="list-group-item"><b>Phone :</b> {{ $societie->telephone }}</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="{{ route('societie.show', $societie->id) }}"
                                                    class="card-link"><button>Details</button></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
