




const { createApp } = Vue

createApp({

  // VARIABILI VUE
  data() {
    return {
      
      apiUrl: 'server.php',
      data: '',
      dettagliodisco: '',
      


    }
  },

  // FUNZIONI VUE
  methods: {

    chiamataApi(){

      axios.get( this.apiUrl)
        .then((res) => {
          this.data = res.data
        })

    },

    showcard( index ) {

      //informzazione inviato al server
      const datoindice = {
        discoindice: index
      }

      //chiamata axios
      axios.post( this.apiUrl, datoindice, {headers: {'Content-Type':'multipart/form-data'}} )
        .then( (res)=> {
            this.dettagliodisco = res.data;
        })
    }

    
  },

  mounted() {
    this.chiamataApi();
  },



}).mount('#app')
