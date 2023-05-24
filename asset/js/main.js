




const { createApp } = Vue

createApp({

  // VARIABILI VUE
  data() {
    return {
      
      apiUrl: 'server.php',
      data: '',
      


    }
  },

  // FUNZIONI VUE
  methods: {

    chiamataApi(){

      axios.get( this.apiUrl)
        .then((res) => {
          this.data = res.data
        })

    }

    
  },

  mounted() {
    this.chiamataApi();
  },



}).mount('#app')
