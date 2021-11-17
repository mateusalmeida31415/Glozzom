<template>
        <div class="container text-center">
            <!-- Título principal -->
            <h2>{{feedback[0].title}}</h2>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="slider">
                        <!-- Feedbacks -->
                        <div v-for="f in feedback[0].feedback">
                            <blockquote class="blockquote text-center">
                                <!-- Texto do feedback -->
                                <p class="mb-0">{{f.text}}</p>
                                <!-- Nome do escritor do feedback -->
                                <footer class="blockquote-footer">{{f.name}}
                                    <!-- Descrição do escritor -->
                                    <cite :title="f.source">{{f.source}}</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</template>

<script>
    export default {
        // feedback: Objeto com atributos do feedback. title(Título principal), feedback.text(Descrição do escritor), feedback.name(Nome do escritor) e feedback.source(Descrição do escritor) |  [{'title': '', 'feedback' : [{'text': '', 'name': '', 'source': ''}]}]
        props: ['feedback']
    }
</script>