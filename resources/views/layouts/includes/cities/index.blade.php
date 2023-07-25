<section class="city-container">
    <div class="container">
        <div class="">
            <div class="">
                <section class="header">
                    <div class="">
                        <h1 class="title">TOP RATED CITY</h1>
                    </div>
                    <div class="">
                        <p class="sous-title">Integer a porta Quisque nisi felis, tincidunt cursus efficitur at. Duis vel interdum elit. Vivamus vel risus est.</p>
                    </div>
                </section>
                <section class="cards">
                    <div class="all-cards-ville">
                            <div class="card-ville-left">
                                <div class="huge-card">
                                    <div class="a-card">
                                            <div class="card-image">
                                                <a href="{{route('societiesByCitie.index',$topCities[0]->id)}}">
                                                    <img src="{{$topCities[0]->image}}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="card-ville-info">
                                                <div class="icon-info">
                                                    <a href="{{route('societiesByCitie.index',$topCities[0]->id)}}"> 
                                                        <span>{{$topCities[0]->name}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-ville-right">
                                <div class="row-ville">
                                    <div class="card-ville">
                                        <div class="">
                                            <div class="">
                                                <div class="a-card">
                                                    <div class="card-image">
                                                        <a href="">
                                                            <img src="{{asset('assets/images/about-image.jpg')}}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="card-ville-info">
                                                        <div class="icon-info">
                                                            <a href=""> 
                                                                <span>Agadir</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-ville">
                                        <div class="">
                                            <div class="">
                                                <div class="a-card">
                                                    <div class="card-image">
                                                        <a href="">
                                                            <img src="{{asset('assets/images/about-image.jpg')}}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="card-ville-info">
                                                        <div class="icon-info">
                                                            <a href=""> 
                                                                <span>Fes</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-ville">
                                    <div class="card-ville">
                                        <div class="">
                                            <div class="">
                                                <div class="a-card">
                                                    <div class="card-image">
                                                        <a href="">
                                                            <img src="{{asset('assets/images/about-image.jpg')}}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="card-ville-info">
                                                        <div class="icon-info">
                                                            <a href=""> 
                                                                <span>Tanger</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-ville">
                                        <div class="">
                                            <div class="">
                                                <div class="a-card">
                                                    <div class="card-image">
                                                        <a href="">
                                                            <img src="{{asset('assets/images/about-image.jpg')}}" alt=""/>
                                                        </a>
                                                    </div>
                                                    <div class="card-ville-info">
                                                        <div class="icon-info">
                                                            <a href=""> 
                                                                <span>Rabat</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>