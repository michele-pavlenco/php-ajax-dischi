const app = new Vue({
    el: '#app',
    data: {
        dischi: [],
        genres: [],
        selectedGenres: '',
        apiPath: './server.php',
    },
    methods: {
        search(){
            this.getData(this.selectedGenres);
        },
        getData(genre = null){
            let path;
            if(genre){
                path = `${this.apiPath}?genre=${genre}`;
            }else{
                path = this.apiPath;
            }
            axios.get(path).then((res)=>{
                this.dischi = res.data;
                if(this.genres.length === 0){
                    this.dischi.forEach((disco)=>{
                        if(!this.genres.includes(disco.genre)){
                            this.genres.push(disco.genre)
                        }
                    })
                }
            })
            console.log(this.genres)
        }
    },
    mounted(){
        this.getData();
    }
   })