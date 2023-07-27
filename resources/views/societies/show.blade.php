@extends('layouts.app')

@section('content')

    <section class="page-title-banner"
        style="background-image:url(https://smartdemowp.com/reveal/wp-content/uploads/2020/04/l-2.jpg);">
        <div class="container">
            <div class="row m-0 align-items-end detail-swap">
                <div class="tr-list-wrap">
                    <div class="tr-list-detail">
                        <div class="tr-list-thumb">
                            <img src="{{ $societie->image }}" class="author-avater-img" width="90" height="90"
                                alt="img">
                        </div>
                        <div class="tr-list-info">
                            <h4 class="veryfied-list">{{ $societie->title }}</h4>
                            <p>{{ $societie->adress }}, {{ $societie->telephone }}</p>

                        </div>
                    </div>
                    <div class="listing-detail_right">
                        <div class="listing-detail-item">
                            <a href="#" data-toggle="modal" data-target="#login" class="btn btn-list"><i
                                    class="fa fa-heart" style="padding-right:5px"></i>Favorite</a>
                        </div>
                        <div class="listing-detail-item">
                            <div class="share-opt-wrap">
                                <button type="button" class="btn btn-list" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-share"></i>
                                    Share
                                </button>
                                <div class="dropdown-menu animated flipInX">
                                    <a href="/" target="_blank" class="cl-facebook"><i class="lni-facebook"></i></a>
                                    <a href="" target="_blank" class="cl-twitter"><i class="lni-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="listing-detail-item">
                            <a href="#review_message" class="btn btn-list snd-msg">
                                <i class="fa fa-pen"></i>
                                Review
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="rixel-bar">
                        <div class="rixel-bar-left">
                            <div class="rate-overall rate-high">
                                <div class="overrate-box">3.8 </div>
                                <div class="overrate-box-caption">
                                    <span>Good</span>
                                    <a href="#comments-wrap" class="rating-link">1 reviewers rated</a>
                                </div>
                            </div>
                        </div>
                        <div class="rixel-bar-right">
                            <div class="phone-wrap">
                                <div class="phone-box">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="phone-box-caption">
                                    <span>Call Now</span>
                                    <h5 class="phone-call">
                                        <a href="tel:91 443 209 346">{{ $societie->telephone }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="show-section">
        <div class="container">
            <div class="details-section">
                <div class="left-details">
                    {{-- Desciption --}}
                    <div class="description-details">
                        <div class="description-title">
                            <h1>Description</h1>
                        </div>
                        <div class="description-content">
                            <p>{{$societie->description}}</p>
                        </div>
                    </div>
                    {{-- services --}}
                    <div class="description-details">
                        <div class="description-title">
                            <h1>Services</h1>
                        </div>
                        <div class="description-content">
                            <div class="block-body">
                                <ul class="avl-services">
                                    @foreach($societie->services as $service)
                                        <li><i class="fa fa-check"></i>{{$service->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Rating --}}
                    <div class="description-details">
                        <div class="rating-overview" style="width:100%;">
                            <div class="rating-overview-box">
                                <span class="rating-overview-box-total">3.8</span>
                                <span class="rating-overview-box-percent">out of 5.0</span>
                                <div class="star-rating" data-rating="5">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </div>
                            </div>
                            <div class="rating-bars">
                                <div class="rating-bars-item">
                                    <span class="rating-bars-name">Service</span>
                                    <span class="rating-bars-inner">
                                        <span class="rating-bars-rating high" data-rating="4">
                                            <span class="rating-bars-rating-inner" style="width: 80%;"></span>
                                        </span>
                                        <strong>4 </strong>
                                    </span>
                                </div>
                                <div class="rating-bars-item">
                                    <span class="rating-bars-name">Price</span>
                                    <span class="rating-bars-inner">
                                        <span class="rating-bars-rating high" data-rating="3">
                                            <span class="rating-bars-rating-inner" style="width: 60%;"></span>
                                        </span>
                                        <strong>3</strong>
                                    </span>
                                </div>
                                <div class="rating-bars-item">
                                    <span class="rating-bars-name">Quality</span>
                                    <span class="rating-bars-inner">
                                        <span class="rating-bars-rating high" data-rating="4">
                                            <span class="rating-bars-rating-inner" style="width: 80%;"></span>
                                        </span>
                                        <strong>4</strong>
                                    </span>
                                </div>
                                <div class="rating-bars-item">
                                    <span class="rating-bars-name">Location</span>
                                    <span class="rating-bars-inner">
                                        <span class="rating-bars-rating high" data-rating="4">
                                            <span class="rating-bars-rating-inner" style="width:80%;"></span>
                                        </span>
                                        <strong>4</strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Maps --}}
                    <div class="description-details">
                        <div class="description-title">
                            <h1>Location</h1>
                        </div>
                        <div class="description-content" style="width:100%;height:100%">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1765447.4557971733!2d-0.7723994710233274!3d30.204563933774068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1275a35fd7cbe955%3A0x81367f417e2bf07c!2sKsar%20Kaddour%2C%20Alg%C3%A9rie!5e0!3m2!1sfr!2sma!4v1690456615806!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    {{-- Youtube --}}
                    <div class="description-details">
                        <div class="description-title">
                            <h1>Video</h1>
                        </div>
                        <div class="description-content">
                            <iframe width="100%" height="315px"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </div>
                    {{-- Tous les commentaire--}}
                    <div class="description-details" id="pagination-items">
                        <div class="description-title">
                            <h1>Item Reviews - 1</h1>
                        </div>
                        <div class="description-content">
                            @if (isset($reviews))
                            @foreach ($reviews as $review)
                            <div class="commentaire-section">
                                <div class="agent-photo">
                                    <img src="{{ $societie->image }}" class="author-avater-img" width="60"
                                        height="60" alt="img">
                                </div>
                                <div class="comment">
                                    <div class="comment-info">
                                        <div class="perso-comment">
                                            <span>{{ $review->name }}</span>
                                        </div>
                                        <div class="day-comment">
                                            <i class="fa fa-calendar" style="color:#ff9500"></i><span>{{ $review->created_at }}</span>
                                        </div>
                                    </div>
                                    <div class="star-rating" data-rating="5">
                                        <i class="fa fa-star checked"></i>
                                        <span>{{ array_sum([$review->location_rating, $review->price_rating, $review->service_rating, $review   ->quality_rating]) / 4 }}</span>

                                    </div>
                                    <div class="text-commentaire">
                                        <p class="commentaire">{{ $review->content }}</p>
                                    </div>
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
                    <div class="links">
                        {{$reviews->links()}}
                        {{-- <button id="load-more">Load More</button> --}}
                    </div>
                    {{-- formule commentaires --}}
                    <div class="description-details">
                        <div class="description-title">
                            <h1>Review</h1>
                        </div>
                        <div class="description-content">
                            <form method="POST" action="{{ route('review.store') }}">
                                @csrf
                                <input type="hidden" name="societie_id" value="{{ $societie->id }}">
                                <div class="stars-section">
                                    <div class="stars-left">
                                        <div class="star-row">
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
                                        </div>
                                        <div class="star-row">
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
                                        </div>
                                    </div>
                                    {{-- <div class="total-rating-section">
                                        <div class="rating">
                                            <span>{{ array_sum([$reviews->location_rating, $reviews->price_rating, $reviews->service_rating, $reviews->quality_rating]) / 4 }}</span>
                                            <span>Average Rating</span>
                                        </div>
                                    </div> --}}
                                </div>
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
                                    <label for="review">Your Review:</label>
                                    <textarea class="form-control" name="content" id="review" rows="5" placeholder="Write your review here"
                                       style="min-height:100px;" maxlength="1000" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


                            {{-- <div class="commentaire-rate">
                                <div class="comment-rate">
                                    <div class="rate-head">
                                        <span>Service?</span>
                                    </div>
                                    <div data-productid="{{ $societie->id }}" class="ratings">
                                        <span data-rating="5">&#9733;</span>
                                        <span data-rating="4">&#9733;</span>
                                        <span data-rating="3">&#9733;</span>
                                        <span data-rating="2">&#9733;</span>
                                        <span data-rating="1">&#9733;</span>
                                    </div>
                                </div>
                                <div class="comment-rate">
                                    <div class="rate-head">
                                        <span>Price?</span>
                                    </div>
                                    <div data-productid="{{ $societie->id }}" class="ratings">
                                        <span data-rating="5">&#9733;</span>
                                        <span data-rating="4">&#9733;</span>
                                        <span data-rating="3">&#9733;</span>
                                        <span data-rating="2">&#9733;</span>
                                        <span data-rating="1">&#9733;</span>
                                    </div>
                                </div>
                                <div class="comment-rate">
                                    <div class="rate-head">
                                        <span>Quality?</span>
                                    </div>
                                    <div data-productid="{{ $societie->id }}" class="ratings">
                                        <span data-rating="5">&#9733;</span>
                                        <span data-rating="4">&#9733;</span>
                                        <span data-rating="3">&#9733;</span>
                                        <span data-rating="2">&#9733;</span>
                                        <span data-rating="1">&#9733;</span>
                                    </div>
                                </div>
                                <div class="comment-rate">
                                    <div class="rate-head">
                                        <span>Location?</span>
                                    </div>
                                    <div data-productid="{{ $societie->id }}" class="ratings">
                                        <span data-rating="5">&#9733;</span>
                                        <span data-rating="4">&#9733;</span>
                                        <span data-rating="3">&#9733;</span>
                                        <span data-rating="2">&#9733;</span>
                                        <span data-rating="1">&#9733;</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="right-details">
                    {{-- Form de contact --}}
                    <div class="description-details">
                        <div class="agent-widget">
                            <div class="agent-title">
                                <div class="agent-photo">
                                    <img src="{{ $societie->image }}" class="author-avater-img" width="60"
                                        height="60" alt="img">
                                </div>
                                <div class="agent-details">
                                    <h4>
                                        <a href="{{ $societie->id }}">{{ $societie->title }}</a>
                                    </h4>
                                    <span>
                                        <i class="ti-view-grid"></i>
                                        7 Listings
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="listing-equiry-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="created_for" class="form-control" value="3">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" required="" class="form-control"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" required="" class="form-control"
                                            placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" required="" name="message" placeholder="Send Message to author..."></textarea>
                                    </div>
                                    <div id="message">
                                    </div>
                                    <button type="submit" class="btn btn-theme full-width">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- Horaire --}}
                    <div class="description-details">
                        <div class="time-horaire">
                            <div class="description-title">
                                <div class="description-title-left">
                                    <i class="fa fa-clock" style="color:#17bd62;padding:5px;"></i><span><b>Day</b></span>
                                    <div class="society-status">
                                        <span>open</span>
                                    </div>
                                    <span><b>Country</b></span>
                                </div>
                                <div class="description-title-right">
                                    <span>horaire</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Extra Info--}}
                    <div class="description-details">
                        <div class="description-title-extra">
                            <h1>Listing Info</h1>
                        </div>
                        <div class="tr-single-body">
                            <ul class="extra-service">
                                <li>
                                    <div class="icon-box-icon-block">
                                        <a href="https://www.google.com/maps/search/?api=1&amp;query=24.264129770801087,90.1659532603068" target="_blank">
                                            <div class="icon-box-round">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                            </div>
                                            <div class="icon-box-text">
                                                {{ $societie->adress }}
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box-icon-block">
                                        <a href="tel:91 443 209 346">
                                            <div class="icon-box-round">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                                            </div>
                                            <div class="icon-box-text">
                                                {{ $societie->telephone }}
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box-icon-block">
                                        <a href="mailto:noreply@smartdatasoft.com">
                                            <div class="icon-box-round">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                                            </div>
                                            <div class="icon-box-text">
                                                noreply@smartdatasoft.com
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box-icon-block">
                                        <a href="http://www.smartdatasoft.com">
                                            <div class="icon-box-round">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ff9500}</style><path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/></svg>
                                            </div>
                                            <div class="icon-box-text">
                                                www.smartdatasoft.com
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <div class="single-follow-us-social-icon">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a href="https://www.facebook.com/smartdatasoft.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                                    </a></li>
                                    <li><a href="https://www.instagram.com/smartdatasoft.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                    </a></li>
                                    <li><a href="http://www.linkedin.com/smartdatasoft.com"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a></li>
                                    <li><a href="http://www.tumbler.com/smartdatasoft.com"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{--Tags--}}
                    <div class="description-details">
                        <div class="tr-single-box">
                            <div class="tr-single-header">
                                <h4><i class="fa fa-tag"></i> Tags</h4>
                            </div>
                            <div class="tr-single-body">
                                <ul class="extra-service half">
                                    @foreach ($societie->tags as $tag)
                                    <li>
                                        <div class="icon-box-icon-block">
                                            <a href="https://smartdemowp.com/reveal/rlisting_tags/avenue/">
                                                <div class="icon-box-round">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                                </div>
                                                <div class="icon-box-text">
                                                    {{ $tag->name }}
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <div class="container">

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
                                                <img src="{{ $societie->image }}" class="card-img-top pt-3 w-25"
                                                    alt="...">
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
        </div>
        -->

@endsection
