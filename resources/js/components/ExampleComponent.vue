<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <carousel v-if="imgData.length > 0">
                            <div v-for="(img, index) in imgData" :key="index">
                                <img :src="img.picture" :alt="img.title" >
                            </div>
                        </carousel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    
    import carousel from 'vue-owl-carousel'

    export default {
        components: {
            carousel
        },
        props: {
            msg: String
        },
        data() {
            return {
                imgData: []
            }
        },          
        mounted() {
            axios
            .get('http://127.0.0.1:8000/image-slides')
            .then(res => {
                this.imgData = res.data;
            });
        }      
    }

</script>
