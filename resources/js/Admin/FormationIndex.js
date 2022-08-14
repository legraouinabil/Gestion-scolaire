

Vue.component('FormationIndex', {
   data() {
    return {
    formation:{}

    
    }
   },
   methods: {
    getData(){
        axios.get(formation.list)
        .then(res =>{
            console.log(res.data);
            this.formation = res.data;
        }).catch(err=>console.log(err));
    }
 },
  props :["formation.list"],
});