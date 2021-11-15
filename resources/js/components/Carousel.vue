<template>
    <!-- Carousel-->
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- Indicador de slide -->
            <template v-for="(item, index) in carousel">
                <li :class="(index == 0) ? 'active' : ''" data-target="#slider" :data-slide-to="index"></li>
            </template>
        </ol>
        <div class="carousel-inner">
            <template v-for="(item, index) in carousel">
                <div :class="'carousel-item ' + ((index == 0) ? 'active' : '')" style="max-height: 400px;">
                    <!-- Imagem de fundo -->
                    <img class="img-fluid" :src="item.image" :alt="item.desc">

                    <div class="container">
                        <div :class="'carousel-caption d-none d-sm-block ' + (item.align ? item.align : 'text-center') ">
                            <!-- Título -->
                            <h1 class="display-4">{{item.title}}</h1>
                            <!-- Texto -->
                            <p class="lead">{{item.text}}</p>
                            <!-- Botão -->
                            <a :href="item.link" :class="'btn btn-lg mb-5 ' + item.btnColor">{{item.btnText}}</a>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Botão de controle -->
        <a href="#slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <!-- Botão de controle -->
        <a href="#slider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</template>

<script>
    export default {
        // carousel: Objeto com atributos referentes ao proprio carousel. title(Título dos da mensagem), text(Descrição do título), btnText(Mensagem do botão), link(Referencia do botão), image(Imagem do slide), desc(Descrição da imagem), align(Alinhamento dos elementos) e btnColor(Cor do botão) | {'title': '', 'text': '', 'btnText': '', 'link': '', 'image': '', 'desc': '', 'align': '', 'btnColor' : ''}
        props: ['carousel']
    }
</script>