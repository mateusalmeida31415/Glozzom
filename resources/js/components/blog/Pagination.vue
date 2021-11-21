<template>
    <div class="container d-flex justify-content-center mt-3">
        <nav aria-label="blog posts navegation">
            <ul class="pagination">
                <template v-for="p in pagination">
                    <!-- Botões da paginação -->
                    <!-- Caso a propriedade active seja positiva o botão da página atual terá enfaze -->
                    <!-- Caso a propriedade url seja vazia a botão será desativado -->
                    <li :class="'page-item ' + (p.active ? 'active' : '') + (!p.url ? ' disabled' : '')">
                        <!-- Caso p.url não seja null, será adicionado após a urlBase o sinal de ? com a query de páginação. Evitando o erro de usar o split() com um valor nulo -->
                        <a class="page-link" :href="urlBase + (p.url ? '?' + p.url.split('?')[1]: '')" v-html="p.label"></a>
                    </li>
                </template>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        props: ['pagination', 'urlBase']
    }
</script>
