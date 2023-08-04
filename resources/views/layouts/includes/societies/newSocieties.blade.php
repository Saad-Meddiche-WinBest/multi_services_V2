<section>
      <div class="container">
      <div class="row">
        @foreach ($newsocieties as $society)
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="society-card">
          <div class="image-card">
              <a href="#" class="listing-thumb">
                  <img decoding="async" src="/storage/{{$society->image}}" class="img-responsive" alt="">
              </a>
              <span class="list-rate">{{$society->rating["ratingOfSocietie"] == 0 ? 'No Reviews Yet' : $society->rating["ratingOfSocietie   "]}}</span> 
          </div>
          <div class="society_content">
              <div class="proerty_text">
                  <h3 class="captlize">
                    <a href="/societie/{{$society->id}}/show">
                        {!! strlen($society->title) > 20 ? substr($society->title, 0, 20) . '...' : $society->title !!}
                    </a>
                  <span class="veryfied-author"></span> </h3>
              </div>
                <p>              
                    {!! strlen($society->description) > 50 ? substr($society->description, 0, 50) . '...' : $society->description !!}  
                </p>
              <div class="property_detail">
                  <div class="property-list">
                      <div class="listing-card-info-icon">
                              <span class="sous-inf">{!! strlen($society->adress) > 20 ? substr($society->adress, 0, 20) . '...' : $society->adress !!}</span>
                      </div>
                      <div class="listing-card-info-icon">
                          <a href="tel:{{ $society->telephone }}">
                              <span class="sous-inf">{{ $society->telephone }}</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="listing-footer-info">
            <div class="listing-card-info-icon">
              <i class="fa-solid fa-user-tie" style="color: #fafafa;"></i> <span class="sous-inf"><b>Categorie: </b>{{ $society->categorie->name }}</span>
            </div>
          </div>
      </div>
      </div>
      @endforeach
          </div>
      </div>
    </section>