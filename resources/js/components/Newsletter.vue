<template>
    <div class="container text-center">
        <!-- Título -->
        <h2 class="h1">{{newsletter[0].title}}</h2>
        <!-- Texto explicativo -->
        <p>{{newsletter[0].text}}</p>
        <div class="form-inline justify-content-center">
            <template v-for="input in newsletter[0].inputs">
                <!-- Input criado de forma programatica -->
                <input class="form-control mr-2 my-1" :type="input.type" :placeholder="input.placeholder" v-model="input.value">
            </template>
            <!-- Botão de submit -->
            <button @click="show()" class="btn btn-primary my-1" type="submit">Submit</button>
        </div>
    </div>
</template>

<script>
    export default {
        // newsletter: Objeto com atributos a section newsletter. title(Título principal), text(Texto explicativo da section) e inputs(Objeto com atributos referentes aos inputs como: type, placeholder e value) | [{'title': '', 'text': '', inputs: [{'type': '', 'placeholder': '', 'value': ''}]}]
        props: ['newsletter'],
        methods: {
            show(){
                this.newsletter[0].inputs.forEach(element => {
                    console.log(element.value)
                })
            }
        }
    }
</script>
