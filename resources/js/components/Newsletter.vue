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
            <button @click="send()" class="btn btn-primary my-1">Submit</button>
        </div>
    </div>
</template>

<script>
    export default {
        // newsletter: Objeto com atributos a section newsletter. title(Título principal), text(Texto explicativo da section) e inputs(Objeto com atributos referentes aos inputs como: type, placeholder e value) | [{'title': '', 'text': '', inputs: [{'type': '', 'placeholder': '', 'value': ''}]}]
        props: ['newsletter'],
        methods: {
            send(){
                // URL de envio da requisição 
                let url = 'http://glozzom.test/api/newsletter'
                
                //Instância do FormData para criação de um formulário de forma programtica
                let form = new FormData()

                // Cabeçalho da requisição
                let config = {
                    heards: {
                        'Accept': 'application/json'
                    }
                }

                // Criando os inputs do formulário de forma programatica
                this.newsletter[0].inputs.forEach((element, key) => {
                    // if(key != 0){
                    //     url += '&'
                    // }

                    if(element.name == '' || element.value == ''){
                        return false 
                    }

                    form.append(element.name, element.value)

                    // url += element.name + '=' + element.value
                })

                // Envio da requição para cadastro na newsletter
                axios.post(url, form, config)
                    .then(response => {
                        this.$store.state.newsletter.msg = response.data.msg
                        this.$store.state.newsletter.status = response.status
                    })
                    .catch( erro => {
                        this.$store.state.newsletter.msg = erro.response.data.errors
                        this.$store.state.newsletter.status = erro.response.status
                    })
            }
        }
    }
</script>
