@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">

            {{-- Societie --}}
            <div class="col-md-12">
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
                                                <p class="card-text">{!! $societie->description !!}</p>
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
                                            <li class="list-group-item">
                                                <b>Services:</b>
                                                @foreach ($societie->services as $service)
                                                    <span>{{ $service->name }}-</span>
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


            {{-- Reviews --}}
            <div class="col-md-12 mt-5">
                <div class="card mb-5">
                    <div class="card-header">{{ __('Reviews') }}</div>
                    <div class="card-body">
                        <section class="section bg-light">
                            <div class="container">
                                <div class="row align-items-stretch retro-layout justify-content-center">
                                    @if (isset($reviews))
                                        @foreach ($reviews as $review)
                                            <div class="col-md-4 mb-4">
                                                <div class="card text-decoration-none text-dark h-100">

                                                    <div class="card-body d-flex flex-column">
                                                        <h2 class="card-title">{{ $review->name }}</h2>
                                                        <div class="card-text mt-auto">
                                                            {{ $review->email }}
                                                        </div>
                                                    </div>

                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item"><b>Description :</b>
                                                            {{ $review->content }}
                                                        </li>
                                                        <li class="list-group-item"><b>Rating :</b>
                                                            {{ array_sum([$review->location_rating, $review->price_rating, $review->service_rating, $review->quality_rating]) / 4 }}
                                                        </li>
                                                        <li class="list-group-item"><b>Creation Date :</b>
                                                            {{ $review->created_at }}
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="text-center">
                                            No Reviews ...
                                        </div>
                                    @endif

                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>


            {{-- Review Form --}}
            <div class="container mt-4">
                <h2>Review Form with Multiple Ratings</h2>
                <form method="POST" action="{{ route('review.store') }}">
                    @csrf
                    <input type="hidden" name="societie_id" value="{{ $societie->id }}">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label>Location:</label>
                        <div id="location-rating"></div>
                        <input type="hidden" name="location_rating" id="location-rating-value" required>
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <div id="price-rating"></div>
                        <input type="hidden" name="price_rating" id="price-rating-value" required>
                    </div>
                    <div class="form-group">
                        <label>Quality:</label>
                        <div id="quality-rating"></div>
                        <input type="hidden" name="quality_rating" id="quality-rating-value" required>
                    </div>
                    <div class="form-group">
                        <label>Service:</label>
                        <div id="service-rating"></div>
                        <input type="hidden" name="service_rating" id="service-rating-value" required>
                    </div>
                    <div class="form-group">
                        <label for="review">Your Review:</label>
                        <textarea class="form-control" name="content" id="review" rows="5" placeholder="Write your review here"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @endsection
