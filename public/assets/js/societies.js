Vue.component('societie-list', {
    
    data() {
      return {
        societies: [],
        societie:'',
        looking_for:''
      };
    },
    methods: {
      fetch_societies() {
        axios.get('/api/societies')
          .then(response => {
            this.societies = response.data.societies;
            console.log(response);
          })
          .catch(error => {
            console.error(error);
          });
      },
      show_societie(societie){
        axios.get('/api/societie/'+societie.id+'/show')
        .then(response => {
          this.societie = response.data.societie;
          console.log(this.societie);
        })
        .catch(error => {
          console.error(error);
        });
      }
    },
    mounted() {
      this.fetch_societies();
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
            item.tags.some(tag => tag.name.toLowerCase().includes(searchValue)),
            item.demi_categorie.name.toLowerCase().includes(searchValue),
            item.web_link.toLowerCase().includes(searchValue),
            item.description.toLowerCase().includes(searchValue)
          ];
          
          if (item.fax != null) {
            matches.push(item.fax.toLowerCase().includes(searchValue));
          }
          
          return matches.some(match => match);
          
        });      
      }
    },
    template: `
    <div class="container">
    <h1 class="mt-4">Societies</h1>
    <div class="m-4">
      <input type="text" v-model="looking_for" placeholder="Search ...">
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4" v-for="societie in filtred_societies" :key="'societie'+societie.id">
            <div class="card h-100">
                <img v-if="societie.image" :src="societie.image" class="card-img-top" alt="Societie Image">
                <div class="card-body">
                    <h5 class="card-title">{{ societie.title }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>ICE:</strong> {{ societie.ice }}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ societie.adress }}</li>
                        <li class="list-group-item"><strong>Telephone:</strong> {{ societie.telephone }}</li>
                        <li class="list-group-item">
                            <strong>Cities:</strong>
                            <span v-for="citie in societie.cities">{{ citie.name }}-</span>
                        </li>
                        <li class="list-group-item"><strong>Web Link:</strong> <a :href="societie.web_link">{{ societie.web_link }}</a></li>
                        <li class="list-group-item"><strong>Demi Categorie:</strong> {{ societie.demi_categorie.name }}</li>
                        <li class="list-group-item">
                            <strong>Tags:</strong>
                            <span class="tag" v-for="tag in societie.tags">{{ tag.name }}-</span>
                        </li>
                        <li class="list-group-item"><strong>Description:</strong> {{ societie.description }}</li>
                        <li class="list-group-item"><strong>Fax:</strong> {{ societie.fax }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" @click="show_societie(societie)">More Info</button>
                </div>
            </div>
        </div>
    </div>
</div>

    `
});
  
new Vue({
  el: '#app'
});




  