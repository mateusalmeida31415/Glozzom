<template>
    <!-- MODAL -->
    <div class="modal fade" :id="id" @mouseover="play()" @mouseleave.click="stop()" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Video -->
                    <iframe class="embed-responsive-item" width="100%" height="350"   :src="video" allowfullscreen></iframe>
                </div>
                <div class="py-3 text-center">
                    <!-- Botão para fechar o modal -->
                    <button class="btn btn-danger shadow-lg" data-dismiss="modal" @click="stop()">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                //Link do video de acordo com seu estado de reprodução
                video: ''
            }
        },
        // id: ID do modal
        // link: Link do video
        props: ['id', 'link'],
        methods: {
            // Quando o mouse estiver sobre o model o video será reproduzido
            play(){
                this.video = this.link + '&autoplay=1'
            },
            // Quando click no botão de close ou fora do model o vídeo será fechado
            stop(){
                this.video = this.link
            }
            
        }, 
        mounted(){
            this.video = this.link
        }
    }
</script>