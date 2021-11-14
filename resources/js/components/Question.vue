<template>
    <div class="overlay py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <!-- Icon -->
                    <a v-if="question[0].icon" class="text-white" href="" data-toggle="modal" :data-target="question[0].target">
                        <i :class="question[0].icon + ' pb-2'"></i>
                    </a>
                    <!-- Pergunta -->
                    <h2>{{question[0].title}}</h2>
                    <!-- Texto explicativo -->
                    <p class="lead mb-0" v-if="question[0].text">{{question[0].text}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // question: Objeto com atributos referente a question section. title(A pergunta), text(Texto explicativo), icon(Icone de exibição | classe fontawesome), target(ID de uma modal de referência). | {'title': '', 'text': '', 'icon': '', 'target': ''}
        props: ['question']
    }
</script>