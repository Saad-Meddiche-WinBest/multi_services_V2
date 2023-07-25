<div class="cities-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="col-md-12">
                    <div class="headline-main-header">
                        <h1><strong>Différentes villes</strong></h1>
                    </div>
                </div>
                {{-- Cities --}}
                
                <div class="row">
                    <div class="container align-items-stretch d-flex flex-wrap ps-3" style="width: 1020px">
                        @foreach ($topCities as $citie)
                        <div class="row">
                            <div class="image">
                                <img
                                    src="{{ $citie->image }}"
                                    class="w-100 shadow-1-strong rounded mb-4"
                                    alt="Boat on Calm Water"
                                />
                                <div class="details">
                                    <h2>{{ $citie->name }}</h2>
                                    <p>With More Than: {{ $citie->societies_count }} Societies</p>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="image">
                            <img
                                src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                class="w-100 shadow-1-strong rounded mb-4"
                                alt="Wintry Mountain Landscape"
                            />
                            <div class="details">
                                <h2>Ville</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque cupiditate, aliquid iusto nobis molestias delectus itaque, id quisquam voluptatum accusamus explicabo tempore optio corrupti autem ullam veniam dignissimos dolorem.</p>
                                <div class="more">
                                    <a href="#" class="read-more">Read<span>More</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
{{--                 
                    <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Mountains in the Clouds"
                    />
                    <div class="details">
                        <h2>Ville</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque cupiditate, aliquid iusto nobis molestias delectus itaque, id quisquam voluptatum accusamus explicabo tempore optio corrupti autem ullam veniam dignissimos dolorem.</p>
                        <div class="more">
                            <a href="#" class="read-more">Read<span>More</span></a>
                        </div>
                    </div>
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Boat on Calm Water"
                    />
                    <div class="details">
                        <h2>Ville</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque cupiditate, aliquid iusto nobis molestias delectus itaque, id quisquam voluptatum accusamus explicabo tempore optio corrupti autem ullam veniam dignissimos dolorem.</p>
                        <div class="more">
                            <a href="#" class="read-more">Read<span>More</span></a>
                        </div>
                    </div>
                    </div>
                
                    <div class="col-lg-4 mb-4 mb-lg-0">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Waves at Sea"
                    />
                    <div class="details">
                        <h2>Ville</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque cupiditate, aliquid iusto nobis molestias delectus itaque, id quisquam voluptatum accusamus explicabo tempore optio corrupti autem ullam veniam dignissimos dolorem.</p>
                        <div class="more">
                            <a href="#" class="read-more">Read<span>More</span></a>
                        </div>
                    </div>
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                        class="w-100 shadow-1-strong rounded mb-4"
                        alt="Yosemite National Park"
                    />
                    <div class="details">
                        <h2>Ville</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque cupiditate, aliquid iusto nobis molestias delectus itaque, id quisquam voluptatum accusamus explicabo tempore optio corrupti autem ullam veniam dignissimos dolorem.</p>
                        <div class="more">
                            <a href="#" class="read-more">Read<span>More</span></a>
                        </div>
                    </div>
                </div> --}}
            </div>    
        </div>
    </div>
</div>


{{-- <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
  
      <div class="section-header">
        <h2>Portfolio</h2>
        <p>sunt deleniti</p>
      </div>
  
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 portfolio-container">
            @foreach ($topCities as $citie)
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <a href="" class="glightbox"><img src="{{ $citie->image }}" class="img-fluid" alt=""></a>
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html" title="More Details">{{ $citie->name }}</a></h4>
                        <p>
                            With More Than: {{ $citie->societies_count }} Societies
                        </p>
                    </div>
                </div>
            </div><!-- End  Item -->
            @endforeach
  
          <!-- End Portfolio Item -->
  
        </div><!-- End Portfolio Container -->
  
      </div>
  
    </div>
  </section><!-- End Portfolio Section --> --}}
</div>