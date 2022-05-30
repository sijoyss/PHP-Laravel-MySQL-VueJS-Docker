<template>
    <div class="form">
        <h1 class="text-center">Poll : Apex VS Valorant</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-md-12 text-center">
                        <img src="https://img.wallpapersafari.com/desktop/1536/864/52/74/SpE9f8.jpg" class="img-fluid" alt="Responsive image" />
                </div>
                <br>
                <div class="text-center">
                        <p class="mb-0">APEX LEGENDS: a free-to-play hero shooter game where legendary competitors battle for glory, fame, and fortune on the fringes of the Frontier.</p>
                </div>
                <br>
                <input type="text" placeholder="Enter your name here and hit submit if you like Apex Legends" id="name" class="form-control" v-model="item.name">
                    <div class="col-md-12 text-center">
                        <br>
                        <button class="btn btn-primary btn-lg btn-block" @click="asubmit">Submit</button>
                    </div>
                    <div class="col-md-12 text-center">
                        <br>
                        <label for="apexliks">Total Likes for Apex Legends: {{apexlikes.length}}</label>
                    </div>
                    
            </div>

            <div class="col-sm-6">
                <div class="col-md-12 text-center">
                        <img src="https://valorantstrike.com/wp-content/uploads/2020/07/Valorant-Wallpaper-Boys-Rainbow-Display.jpg" class="img-fluid" alt="Responsive image" />
                </div>
                <br>
                <div class="text-center">
                        <p class="mb-0">VALORANT: a 5v5 character-based tactical FPS where precise gunplay meets unique agent abilities.</p>
                </div>
                <br>
                <input type="text" placeholder="Enter your name here and hit submit if you like Valorant" id="name" class="form-control" v-model="item2.name">
                    <div class="col-md-12 text-center">
                        <br>
                        <button class="btn btn-primary btn-lg btn-block" @click="vsubmit">Submit</button>
                    </div>
                    <div class="col-md-12 text-center">
                        <br>
                        <label for="valorantliks">Total Likes for Valorant: {{valorantlikes.length}}</label>
                    </div>
            </div>
        </div>
            <div class="col-md-12 mt-3">
                <h2 class="text-center">
                    
                    
                </h2>
            </div>
            
    </div>
</template>

<script>
export default{
    name: 'Likes',
    data() {
        return {
            apexlikes: [],
            valorantlikes: [],
            item:{
                name:"",
            },
            item2:{
                name:""
            }
            
        }
    },
    mounted(){
        this.fetchAllapex()
        this.fetchAllvalorant()
    },
    methods:{
        asubmit(){
            try{
                axios.post('/api/apex',this.item)
                .then(res=>{
                    this.item ={
                        name:""
                    },
                    this.fetchAllapex()
                })
            }catch(e){
                console.log(e);
            }
        },
             vsubmit(){
            try{
                axios.post('/api/valorant',this.item2)
                .then(res=>{
                    this.item2 ={
                        name:""
                    },
                    this.fetchAllvalorant()
                })
            }catch(e){
                console.log(e);
            }
        },
        fetchAllapex() {
            try {
                axios.get('/api/apex')
                .then(res=>this.apexlikes = res.data)
            }catch(e){
                console.log(e)
            }
        },
        fetchAllvalorant() {
            try {
                axios.get('/api/valorant')
                .then(res=>this.valorantlikes = res.data)
            }catch(e){
                console.log(e)
            }
        }
    },

    }


</script>

<style>

</style>