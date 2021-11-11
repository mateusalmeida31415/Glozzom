<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center text-center">
                <!-- Título -->
                <h3>{{info[0].title}}</h3>
                <!-- Descrição do título -->
                <p>{{info[0].text}}</p>
                <!-- Botão -->
                <a :href="info.link" class="btn btn-outline-danger btn-lg">{{info[0].btnText}}</a>
            </div>
            <div class="col-md-6">
                <!-- Imagem explicativa -->
                <img :src="info[0].image" :alt="info[0].desc" class="img-fluid">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // info: Objeto com atributos referentes a info section. title(Título da sessão), text(Descrição do título), btnText(Texto do botão), link(Link de referência do botão), image('Imagem exibida na sessão') e desc(Descrição da imagem) | {'title': '', 'text': '', 'btnText': '', 'link': '', 'image': '', 'desc': ''}
        props: ['info']
    }
</script>