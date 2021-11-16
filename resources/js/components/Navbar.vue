<template>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" :id="id">
        <div class="container">
            <!-- Nome da marca -->
            <a class="navbar-brand" :href="brand[0].link">{{brand[0].name}}</a>
            <!-- Hamburger Button -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <!-- Icon Hamburger -->
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Container Collapse  -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <template v-for="item in itens">
                        <li  :class="'nav-item ' + ((item.path == route) ? 'active' : '')" >
                            <a class="nav-link text-uppercase" :href="(item.link != '') ? item.link : item.ref">{{item.text}}</a>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        // id: ID da barra de navegação
        // brand: Objeto com atributos com detalhes da marca. name(Nome da marca) e link(Link de referencia da marca) | {'name': '', 'link': ''} 
        // itens: Objetos com atributos com detalhes dos itens da barra de navegação. link(Link de referencia para outra página), text(Texto do botão), ref(ID de referencia) e path(Path de referencia do botão) | {'text': '', 'link': '', 'ref': '', 'path': ''}
        data(){
            return {
                //Rota atual
                route: ''
            }
        },
        props: ['brand', 'id', 'itens'],
        methods: {
            // Modifica a proproidade route com o valor atual da rota
            routeName(){
                this.route = window.location.pathname
            }
        },
        mounted() {
            this.routeName()
        }
    }
</script>