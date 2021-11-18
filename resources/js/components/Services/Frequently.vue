<template>
    <div class="container text-center text-white">
        <!-- Título principal -->
        <h2 class="h1 pb-3">{{questions.title}}</h2>
        <div class="row mt-3">
            <!-- Primeiro Accordion -->
            <div class="col-md-6">
                <template v-for="(question, key) in questions.accordion1">
                    <div id="accordion">
                        <div class="card">
                            <!-- Card head -->
                            <div class="card-header">
                                <h5 class="m-0">
                                    <!-- Pergunta -->
                                    <a :href="'#collapse1' + key" data-parent="#accordion" data-toggle="collapse" class="text-white">
                                        {{question.question}}
                                    </a>
                                </h5>
                            </div>
                            <!-- Card Body -->
                            <div :id="'collapse1' + key" class="collapse">
                                <!-- Resposta da pergunta -->
                                <div class="card-body">
                                    {{question.answer}}
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <!-- Segundo Accordion 2 -->
            <div class="col-md-6">
                <template v-for="(question, key) in questions.accordion2">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">
                                    <a :href="'#collapse2' + key" data-parent="#accordion" data-toggle="collapse" class="text-white">
                                        {{question.question}}
                                    </a>
                                </h5>
                            </div>

                            <div :id="'collapse2' + key" class="collapse">
                                <div class="card-body">
                                    {{question.answer}}
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // questions: Objeto com atributos da frequently questions sections. title(Título principal da section), accordion1.question/accordion2.question(Pergunta frequente) e accordion1.answer/accordion2.answer(Resposta da pergunta) | {'title': '', 'accordion1': [{'question': '', 'answer': ''}], 'accordion2': [{'question': '', 'answer': ''}]}
        props: ['questions']
    }
</script>