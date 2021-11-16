<template>
    <div class="container text-center">
        <!-- Título -->
        <h2>{{gallery[0].title}}</h2>
        <!-- Subtitulo -->
        <p>{{gallery[0].subtitle}}</p>
        <!-- Galeria -->
        <template v-for="(item, key) in gallery[0].images">
            <div :class="'row justify-content-around' + (((gallery[0].images.length-1) != key) ? ' mb-4' : '')">
                <template v-for="image in item">
                    <!-- Colunas -->
                    <div class="col-md-4">
                        <!-- Imagem -->
                        <a :href="image.link" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
                            <img :src="image.src" :alt="image.alt" class="img-fluid">
                        </a>
                    </div>
                </template>
            </div>
        </template>
    </div>
</template>

<script>
    export default {
        // gellery: Objeto com algumas propriedade da section gallery. title(Título principa), subtitle(Explicação do título) e images(Array de elementos como fotos, descrição e link) | images: [[{'src': '', 'alt': '', 'link': ''}]]
        props: ['gallery']
    }
</script>