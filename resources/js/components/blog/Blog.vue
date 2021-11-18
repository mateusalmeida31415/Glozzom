<template>
    <div class="container">
        <div class="row">
            <template v-for="p in post">
                <div class="col-md-4">
                    <!-- Post -->
                    <div class="card shadow">
                        <!-- Image -->
                        <img class="card-img-top" :src="p.image.src" :alt="p.image.alt">
                        <div class="card-body">
                            <!-- Título da publicação -->
                            <h3 class="card-title">{{p.title}}</h3>
                            <!-- Fonte e data da publicação -->
                            <span class="text-muted border-bottom d-block pb-2">
                                <small>{{p.whiter}}</small>
                            </span>
                            <!-- Resumo da postagem -->
                            <p class="card-text mt-3">{{p.demo}}</p>
                            <!-- Botão que redireciona para o post -->
                            <div class="text-center">
                                <a class="btn btn-primary" :href="p.btn.link">{{p.btn.title}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- Citação relacioanda ao post -->
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <blockquote class="card-blockquote card-body">
                                <!-- Conteúdo da citação-->
                                <p>{{p.quote.text}}</p>
                                <!-- Fonte da citação -->
                                <footer class="blockquote-footer"> 
                                    {{p.quote.font}} 
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
    export default {
        // post: Objeto com propriedades da post section. image.src(Referência da imagem), image.alt(Texto descritivo da imagem), title(Título da postagem), whiter(Nome do escritor e data de postagem), demo(Descrição da postagem), btn.title(Título do botão), btn.link(Link de referência do botão), quote.text(Texto da citação) e quote.font(Fonte da citação) | [{'image': {'src': '', 'alt': ''}, 'title': '', 'whiter': '', 'demo': '', 'btn': {'title' :'', 'link': ''}, 'quote': {'text': '', 'font': ''}}]
        props: ['post'] 
    }
</script>