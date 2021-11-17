<template>
    <div class="container">
        <div class="row">
            <div class="col col-lg-6">
                <!-- Título -->
                <h3 class="h1">{{itens[0].title}}</h3>
                <template v-for="item in itens[0].text">
                    <!-- Quantidade x de paragrafos do texto -->
                    <p class="lead">{{item.p}}</p>
                </template>
            </div>
            <div class="col d-none d-md-block col-lg-6">
                <!-- Imagem -->
                <img class="img-fluid rounded-circle" :src="itens[0].image.src" :alt="itens[0].image.alt">
            </div>

            <div class="row">
                <!-- Criação dos card de forma programatica -->
                <template v-for="(card, index) in itens[0].cards">
                    <div class="col-md-4">
                        <div :class="'card p-3 text-center text-white mt-4 ' + (!(index % 2 == 0) ? 'bg-dark' : 'bg-danger') ">
                            <div class="card-body">
                                <!-- Card Icon  -->
                                <span><i :class="card.icon"></i></span>
                                <!-- Card título -->
                                <h4 class="card-title">{{card.title}}</h4>
                                <!-- Card conteúdo -->
                                <p class="card-text">{{card.text}}</p>
                            </div>
                        </div>
                    </div>
                </template>'
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // itens: Um objeto com atributos com vários elementos da whatWeDo section. title(Título principal), text.p(Parágrafos explicativos), image.src(Link de referência da imagem), alt(Descrição da imagem), cards.icon(Icone do card), card.cards.title(Título do card) e cards.text(Texto explicativo do card). | [{'title': '', 'text': {'p': ''}, 'image': {'src': '', 'alt': ''}, 'cards': {'icon': '', 'title': '', 'text': ''}}] 
        props: ['itens']
    }
</script>