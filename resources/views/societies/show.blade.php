@extends('layouts.app')

@section('content')

<section class="page-title-banner" style="background-image:url(https://smartdemowp.com/reveal/wp-content/uploads/2020/04/l-2.jpg);">
    <div class="container">
        <div class="row m-0 align-items-end detail-swap">
            <div class="tr-list-wrap">
                <div class="tr-list-detail">
                    <div class="tr-list-thumb">
                        <img src="{{ $societie->image }}" class="author-avater-img" width="90" height="90" alt="img"> 
                    </div>
                    <div class="tr-list-info">
                        <h4 class="veryfied-list">{{ $societie->title }}</h4>
                        <p>{{ $societie->adress }}, {{ $societie->telephone }}</p>
                        
                    </div>
                </div>
                <div class="listing-detail_right">
                    <div class="listing-detail-item">
                        <a href="#" data-toggle="modal" data-target="#login" class="btn btn-list"><i class="fa fa-heart" style="padding-right:5px"></i>Favorite</a>
                    </div>
                    <div class="listing-detail-item">
                        <div class="share-opt-wrap">
                            <button type="button" class="btn btn-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <a href="tel:91 443 209 346">{{$societie->telephone}}</a>
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
                <div class="description-details">
                    <div class="description-title">
                        <h1>Description</h1>
                    </div>
                    <div class="description-content">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, quo sed. Eligendi cum perspiciatis sequi voluptate labore nulla illo totam enim, cupiditate, quas minima fuga earum quaerat eaque delectus dignissimos.</p>
                    </div>
                </div>
                <div class="description-details">
                    <div class="description-title">
                        <h1>Services</h1>
                    </div>
                    <div class="description-content">
                        <div class="block-body">
                            <ul class="avl-services">
                                <li><i class="fa fa-check"></i>Service 01</li>
                                <li><i class="fa fa-check"></i>Service 02</li>
                                <li><i class="fa fa-check"></i>Service 03</li>
                                <li><i class="fa fa-check"></i>Service 04</li> 
                            </ul>
                        </div>
                    </div>
                </div>
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
                <div class="description-details">
                    <div class="description-title">
                        <h1>Item Reviews - 1</h1>
                    </div>
                    <div class="description-content">
                        <div class="commentaire-section">
                            <div class="agent-photo">
                                <img src="{{ $societie->image }}" class="author-avater-img" width="60" height="60" alt="img">
                            </div>
                            <div class="comment">
                                <div class="comment-info">
                                    <div class="perso-comment">
                                        <span>Admin</span>
                                    </div>
                                    <div class="day-comment">
                                        <i class="fa fa-calendar" style="color:#ff9500"></i><span>17 June 2023</span>
                                    </div>
                                </div>
                                <div class="star-rating" data-rating="5">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star "></i> 
                                </div>
                                <div class="text-commentaire">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, quo sed. Eligendi cum perspiciatis sequi voluptate labore nulla illo totam enim, cupiditate, quas minima fuga earum quaerat eaque delectus dignissimos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-details">
                    <div class="description-title">
                        <h1>Item Reviews - 1</h1>
                    </div>
                    <div class="description-content">
                        <div class="commentaire-rate">
                            <div class="comment-rate">
                                <div class="rate-head">
                                    <span>Service?</span>
                                </div>
                                <div data-productid="{{$societie->id}}" class="ratings">
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
                                <div data-productid="{{$societie->id}}" class="ratings">
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
                                <div data-productid="{{$societie->id}}" class="ratings">
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
                                <div data-productid="{{$societie->id}}" class="ratings">
                                    <span data-rating="5">&#9733;</span>
                                    <span data-rating="4">&#9733;</span>
                                    <span data-rating="3">&#9733;</span>
                                    <span data-rating="2">&#9733;</span>
                                    <span data-rating="1">&#9733;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-details">
                <div class="description-details">
                    <div class="agent-widget">
                        <div class="agent-title">
                            <div class="agent-photo">
                                <img src="{{ $societie->image }}" class="author-avater-img" width="60" height="60" alt="img">
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
                                    <input type="text" name="name" required="" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required="" class="form-control" placeholder="Your Email">
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
            </div>
        </div>
    </div>
</section>


    {{-- <div class="container">
        <div class="row justify-content-center">
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
    </div> --}}
@endsection
