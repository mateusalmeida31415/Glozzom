<template>
    <div class="container">
        <div class="row py-3">
            <template v-for="item in benefits">
                <div class="col-md col-12 text-center my-4">
                    <!-- Icones -->
                    <span><i :class="item.icon"></i></span>
                    <!-- Beneficio Título-->
                    <h2>{{item.title}}</h2>
                    <!-- Beneficio Explicação -->
                    <p class="mb-0">{{item.text}}</p>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
    export default {
        // benefits: Objeto atributos refetentes aos beneficios. title(Benefício), text(Descrição do benefício) e icon(Icones que explique o título) | {'title': '', 'text': '', 'icon': ''}
        props: ['benefits']
    }
</script>