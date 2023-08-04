<div class="container">
    <div class="premium">
        <div class="premium-header">
            <div class="premium-header-title">
                <span class="sous-titre">Explore-Now</span>
                <h1 class="titre-about">Enjoy the happenings</h1>
                <p class="p-about">Volutpat consequat mauris nunc congue nisi.<br> Sed ullamcorper morbi tincidunt
                    ornare. Ac placerat ves lectus</p>
            </div>
            <div class="premium-header-button">
                <i id="left" class="fa fa-angle-left"></i>
                <i id="right" class="fa fa-angle-right"></i>
            </div>
        </div>
        <div class="wrapper">
            <ul class="carousel">
                @foreach ($premiumSocieties as $society)
                    <li class="card h-100">
                        <div class="img">
                            <img src="/storage/{{ $society->image }}" alt="img" draggable="false">
                        </div>
                        <div class="card-title">
                            <h2>{!! strlen($society->title) > 20 ? substr($society->title, 0, 20) . '...' : $society->title !!}</h2>
                        </div>
                        <i class="fa fa-map-pin"></i>
                        <span>{!! strlen($society->adress) > 20 ? substr($society->adress, 0, 20) . '...' : $society->adress !!}</span>
                        <div class="contact">
                            <div class="tel">
                                <i class="fa fa-phone"></i>
                                <span>{{ $society->telephone }}</span>
                            </div>
                            <div class="time">
                                <i class="fa fa-clock"></i>
                                <span>09:00 | 21:00</span>
                            </div>
                        </div>
                        <div class="card-info">
                            <div class="button-section">
                                <button class="btn btn-light">From $39</button>
                            </div>
                            <div class="button-section">
                                <a href="{{ route('societie.show', $society->id) }}"><button class="btn btn-primary">
                                        Voir Plus</button></a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
        <div class="swipe">
            <div>
                <span>Swipe for more</span>
            </div>
            <div>
                <i class="fa fa-arrow-right"></i>
            </div>
        </div>
    </div>
</div>
