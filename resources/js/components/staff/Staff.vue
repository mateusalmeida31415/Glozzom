<template>
    <div class="container text-center text-white">
        <!-- Título proncipal -->
        <h3 class="h1 pb-2">{{staff[0].title}}</h3>
        <div class="row mt-3">
            <template v-for="people in staff[0].people">
                <div class="col-md-3 text-center">
                    <!-- Foto do integrante da equipe -->
                    <img class="img-fluid rounded-circle" :src="people.image.src" :alt="people.image.alt">
                    <!-- Nome do integrante -->
                    <h4 class="mt-3">{{people.name}}</h4>
                    <!-- Função do integrante -->
                    <p><small>{{people.job}}</small></p>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
    export default {
        // staff: Objeto com propriedades da staff section. title(Título principal), people.img.src(Caminho da foto do integrante da equipe), people.img.alt(Texto descritivo da imagem), people.name(Nome do integrante) e people.job(Cargo do integrante) | [{ 'title': '', 'people': [{'image': {'src':'', 'alt': ''}, 'name': '', 'job': ''}]}]
        props: ['staff']
    }
</script>