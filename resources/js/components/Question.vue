<template>
    <div class="overlay py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <!-- Pergunta -->
                    <h2>{{question[0].title}}</h2>
                    <!-- Texto explicativo -->
                    <p class="lead mb-0">{{question[0].text}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // question: Objeto com atributos referente a question section. title(A pergunta) e text(Texto explicativo). | {'title': '', 'text': ''}
        props: ['question']
    }
</script>