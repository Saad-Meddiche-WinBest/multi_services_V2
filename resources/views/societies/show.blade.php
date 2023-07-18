@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {{-- Societie --}}
                <div class="card">
                    <div class="card-header">{{ __('Societie') }}</div>
                    <div class="card-body">
                        <section class="section bg-light">
                            <div class="container">
                                <div class="row align-items-stretch retro-layout justify-content-center">
                                    <div class="card col-12 m-4" style="width: 100%;">
                                        <div class="d-flex m-3">
                                            <img src="{{ $societie->image }}" class="card-img-top pt-3 w-25" alt="...">
                                            <div class="card-body align-item-center">
                                                <h5 class="card-title">{{ $societie->title }}</h5>
                                                <p class="card-text">{{ $societie->description }}</p>
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><b>Link :</b> <a
                                                    href="{{ $societie->web_link }}">{{ $societie->web_link }}</a>
                                            </li>
                                            <li class="list-group-item"><b>Adress :</b> {{ $societie->adress }}</li>
                                            <li class="list-group-item"><b>Phone :</b> {{ $societie->telephone }}</li>
                                            <li class="list-group-item"><b>Fax:</b> {{ $societie->fax }}</li>

                                            <li class="list-group-item"><b>ICE:</b> {{ $societie->ice }}</li>
                                            <li class="list-group-item">
                                                <b>Cities:</b>
                                                @foreach ($societie->cities as $citie)
                                                    <span>{{ $citie->name }}-</span>
                                                @endforeach
                                            </li>

                                            <li class="list-group-item"><b>Demi Categorie:</b>
                                                {{ $societie->demiCategorie->name }}</li>
                                            <li class="list-group-item">
                                                <b>Tags:</b>
                                                @foreach ($societie->tags as $tag)
                                                    <span class="tag">{{ $tag->name }}-</span>
                                                @endforeach
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
