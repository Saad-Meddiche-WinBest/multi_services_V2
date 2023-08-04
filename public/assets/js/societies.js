Vue.component('societie-list', {
    
    data() {
      return {
        societies: [],
        societie:'',
        looking_for:'',
        hidden_search:''
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
            console.log(this.societies)

          })
          .catch(error => {
            console.error(error);
          });
      }
      ,
      show_societie(societie){
        window.location.replace('/societie/'+ societie.id +'/show');
      },
      check_url_parametre($parametre){
        const urlParams = new URLSearchParams(window.location.search);
        const paramExists = urlParams.has($parametre);
        return paramExists ? urlParams.get($parametre) : '';
      },
      limit_text(text , limit){
        return text.length > limit ? text.substring(0,limit)+"..." : text; 
      }
    },
    mounted() {
      this.fetch_societies();
      this.hidden_search = this.check_url_parametre('search');
    },


    computed:{
      
      filtred_societies(){
        
        return this.societies.filter(item => {
         
          const searchValue = this.looking_for.toLowerCase() || this.hidden_search.toLowerCase();
        
          const matches = [
            item.title?.toLowerCase().includes(searchValue),
            item.telephone?.toLowerCase().includes(searchValue),
            item.ice?.toLowerCase().includes(searchValue),
            item.adress?.toLowerCase().includes(searchValue),
            item.cities?.some(city => city.name.toLowerCase().includes(searchValue)),
            item.services?.some(service => service.name.toLowerCase().includes(searchValue)),
            item.tags?.some(tag => tag.name.toLowerCase().includes(searchValue)),
            item.web_link?.toLowerCase().includes(searchValue),
            item.description?.toLowerCase().includes(searchValue),
            item.facebook?.toLowerCase().includes(searchValue),
            item.twitter?.toLowerCase().includes(searchValue),
            item.instagram?.toLowerCase().includes(searchValue),
            item.linkdin?.toLowerCase().includes(searchValue),
            item.email?.toLowerCase().includes(searchValue),
            item.coordinations?.toLowerCase().includes(searchValue),
            item.video?.toLowerCase().includes(searchValue),
            
          ];
          
          if (item.fax != null) {
            matches.push(item.fax.toLowerCase().includes(searchValue));
          }
          
          return matches.some(match => match);
          
        });    
        
      },
     
    },
    template: `
    <section>
    <div class="main-search">
    <div class="container">
        

        <div class="headline-main-header">
            <h1>La <strong>référence</strong> de toutes vos <strong>recherches</strong> de <strong>professionnels</strong> au <strong>Maroc</strong></h1>
        </div>

        <div class="main-header-box-search">

          <div class="row justify-content-center w-100 " >
              <div class="col-md-10 w-100 " style="padding:0px !important">
                  
                <input type="text" v-model="looking_for" class="form-control w-100" placeholder="Search ..." >                        <ul class="autocomplete"></ul>
              </div>

          </div>
        </div>
    </div>
</div>
      <div class="container" v-if="filtred_societies.length">
      <div class="row">
      
      <div class="col-lg-4 col-md-6 col-sm-12" v-for="societie in filtred_societies" :key="'societie_' + societie.title">  
      <div class="society-card">
          <div class="image-card">
              <a href="#" class="listing-thumb">
                  <img decoding="async" v-if="societie.image" :src="'/storage/'+societie.image" class="img-responsive" alt="">
              </a>
              <span class="list-rate">{{societie.rating.ratingOfSocietie == 0 ? 'No Reviews Yet' : societie.rating.ratingOfSocietie}}</span> 
          </div>
          <div class="society_content">
              <div class="proerty_text">
                  <h3 class="captlize"><a :href="'/societie/'+societie.societie_id+'/show'">{{limit_text(societie.title , 30)}}</a>
                  <span class="veryfied-author"></span> </h3>
              </div>
              <p v-html="limit_text(societie.description , 40)"></p>
              <div class="property_detail">
                  <div class="property-list">
                      <div class="listing-card-info-icon">
                              <span class="sous-inf">{{limit_text(societie.adress , 20)}}</span>
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
            <div class="listing-card-info-icon">
              <i class="fa-solid fa-user-tie" style="color: #fafafa;"></i> <span class="sous-inf"><b>Categorie: </b>{{societie.categorie.name}}</span>
            </div>
          </div>
      </div>
      </div>
          </div>
      </div>
      <div class="text-center w-100" v-else>
        ...
      </div>
    </section>
    `
});
  
new Vue({
  el: '#app'
});




  