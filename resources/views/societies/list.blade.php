<section class="">

    <div class="cards">
        <div class="">
            <section class="gray">
                <div class="container">
                    <div class="row">
                        @foreach ($newSocieties as $society)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="society-card">
                                    <div class="image-card">
                                        <a href="#" class="listing-thumb">
                                            <img decoding="async" src="{{ $society->image }}" class="img-responsive"
                                                alt="">
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#login" class="tag_heart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                viewBox="0 0 32 32" id="heart">
                                                <path fill="#1C1C1C"
                                                    d="M27.657 5.343a8 8 0 0 0-11.314 0L16 5.715l-.343-.372A8 8 0 0 0 4.343 16.657l.778.843.675.731 9.518 10.312.686.742.686-.743 9.518-10.312.675-.731.778-.843a8 8 0 0 0 0-11.313zm-.545 10.445l-.908.982-.676.73L16 27.801 6.472 17.5l-.676-.731-.908-.982a6.77 6.77 0 0 1 0-9.575l.324-.324a6.77 6.77 0 0 1 9.575 0l.527.569.686.742.686-.741.527-.569a6.77 6.77 0 0 1 9.575 0l.324.324a6.77 6.77 0 0 1 0 9.575z">
                                                </path>
                                            </svg>
                                            {{-- <i class="fa-thin fa-heart" style="color: #eeeff2;"></i> --}}
                                        </a>
                                        <span class="list-rate">3.8</span>
                                    </div>
                                    <div class="society_content">
                                        <div class="proerty_text">
                                            <h3 class="captlize"><a href="#">{{ $society->title }}</a>
                                                <span class="veryfied-author"></span>
                                            </h3>
                                        </div>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit Neque similique .
                                        </p>
                                        <div class="property_detail">
                                            <div class="property-list">
                                                <div class="listing-card-info-icon">
                                                    <span class="sous-inf">Casablanca,MA</span>
                                                </div>
                                                <div class="listing-card-info-icon">
                                                    <a href="">
                                                        <span class="sous-inf">{{ $society->telephone }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-footer-info">
                                        <div class="listing-cat">
                                            <a href="" class="cat-icon">
                                                <i class="fa-solid fa-user-tie"
                                                    style="color: #fafafa;"></i>Accounting</a>
                                            <span class="more-cat">+2</span>
                                        </div>
                                        <span class="place-status">Open</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>

</section>
