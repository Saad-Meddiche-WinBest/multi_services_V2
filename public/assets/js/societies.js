Vue.component('societie-list', {
    
    data() {
      return {
        societies: [],
        societie:'',
        looking_for:'',
      };
    }
    ,
    methods: {
      get_url(){
        const url = '/api' + window.location.pathname;
        return url;
      }
      ,
      fetch_societies() {
        axios.get(this.get_url())
          .then(response => {
            this.societies = response.data.societies;
            console.log(this.societies);

          })
          .catch(error => {
            console.error(error);
          });
      }
      ,
      show_societie(societie){
        window.location.replace('/societie/'+ societie.id +'/show');
      }
    },
    mounted() {
      return this.fetch_societies();
    },


    computed:{
      
      filtred_societies(){
        
        return this.societies.filter(item => {
          const searchValue = this.looking_for.toLowerCase();

          const matches = [
            item.title.toLowerCase().includes(searchValue),
            item.telephone.toLowerCase().includes(searchValue),
            item.ice.toLowerCase().includes(searchValue),
            item.adress.toLowerCase().includes(searchValue),
            item.cities.some(city => city.name.toLowerCase().includes(searchValue)),
            item.services.some(service => service.name.toLowerCase().includes(searchValue)),
            item.tags.some(tag => tag.name.toLowerCase().includes(searchValue)),
            item.web_link.toLowerCase().includes(searchValue),
            item.description.toLowerCase().includes(searchValue),
            item.facebook.toLowerCase().includes(searchValue),
            item.twitter.toLowerCase().includes(searchValue),
            item.instagram.toLowerCase().includes(searchValue),
            item.linkdin.toLowerCase().includes(searchValue),
            item.email.toLowerCase().includes(searchValue),
            item.coordinations.toLowerCase().includes(searchValue),
            item.video.toLowerCase().includes(searchValue),
          ];
          
          if (item.fax != null) {
            matches.push(item.fax.toLowerCase().includes(searchValue));
          }
          
          return matches.some(match => match);
          
        });    
        
      }
    },
    template: `
    <section>
    <div class="main-search">
    <div class="container">
        

        <div class="headline-main-header">
            <h1>La <strong>référence</strong> de toutes vos <strong>recherches</strong> de <strong>professionnels</strong> au <strong>Maroc</strong></h1>
        </div>

        <div class="main-header-box-search">

            <form method="GET" action="">
                <div class="row">
                    <div class="col-md-10">
                        
                    <input type="text" v-model="looking_for" class="form-control" placeholder="Search ..." >                        <ul class="autocomplete"></ul>
                    </div>
                    <div class="col-md-2" style="align-items: center">
                        <button onclick="" class="btn btn-danger" type="submit">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                            <span>Trouver<span>
                        </button>
                    </div>

                    <input type="hidden" name="produit" value="" />
                </div>
            </form>
        </div>
    </div>
</div>
      <div class="container">
      <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12" v-for="societie in filtred_societies" :key="'societie'+societie.id">  
      <div class="society-card">
          <div class="image-card">
              <a href="#" class="listing-thumb">
                  <img decoding="async" v-if="societie.image" :src="societie.image" class="img-responsive" alt="">
              </a>
              <a href="#" data-toggle="modal" data-target="#login" class="tag_heart">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" id="heart" ><path fill="#1C1C1C" d="M27.657 5.343a8 8 0 0 0-11.314 0L16 5.715l-.343-.372A8 8 0 0 0 4.343 16.657l.778.843.675.731 9.518 10.312.686.742.686-.743 9.518-10.312.675-.731.778-.843a8 8 0 0 0 0-11.313zm-.545 10.445l-.908.982-.676.73L16 27.801 6.472 17.5l-.676-.731-.908-.982a6.77 6.77 0 0 1 0-9.575l.324-.324a6.77 6.77 0 0 1 9.575 0l.527.569.686.742.686-.741.527-.569a6.77 6.77 0 0 1 9.575 0l.324.324a6.77 6.77 0 0 1 0 9.575z"></path></svg>
                  
              </a>
              <span class="list-rate">3.8</span> 
          </div>
          <div class="society_content">
              <div class="proerty_text">
                  <h3 class="captlize"><a :href="'societie/'+societie.id+'/show'">{{societie.title}}</a>
                  <span class="veryfied-author"></span> </h3>
              </div>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit Neque similique .</p>
              <div class="property_detail">
                  <div class="property-list">
                      <div class="listing-card-info-icon">
                              <span class="sous-inf">Casablanca,MA</span>
                      </div>
                      <div class="listing-card-info-icon">
                          <a href="">
                              <span class="sous-inf">{{societie.telephone}}</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="listing-footer-info">
              <div class="listing-cat">
                  <a href="" class="cat-icon">
                      <i class="fa-solid fa-user-tie" style="color: #fafafa;"></i>Accounting</a>
                  <span class="more-cat">+2</span>
              </div>
              <span class="place-status">Open</span> 
          </div>
      </div>
      </div>
          </div>
      </div>
    </section>
    `
});
  
new Vue({
  el: '#app'
});




  