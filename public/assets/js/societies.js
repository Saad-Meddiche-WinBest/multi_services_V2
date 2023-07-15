Vue.component('societie-list', {
    
    data() {
      return {
        societies: [],
        societie:''
      };
    },
    methods: {
      fetch_societies() {
        axios.get('/societies')
          .then(response => {
            this.societies = response.data.societies;
            console.log(this.societies);
          })
          .catch(error => {
            console.error(error);
          });
      },
      show_societie(societie){
        axios.get('/societie/'+societie.id+'/show')
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
    template: `
    <div class="container">
    <h1 class="mt-4">Societies</h1>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4" v-for="societie in societies" :key="societie.id">
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
                            <span v-for="citie in societie.cities" :key="citie.id">{{ citie.name }}-</span>
                        </li>
                        <li class="list-group-item"><strong>Web Link:</strong> <a :href="societie.web_link">{{ societie.web_link }}</a></li>
                        <li class="list-group-item"><strong>Demi Categorie:</strong> {{ societie.demi_categorie.name }}</li>
                        <li class="list-group-item">
                            <strong>Tags:</strong>
                            <span class="tag" v-for="tag in societie.tags" :key="tag.id">{{ tag.name }}-</span>
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




  