<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <div class="card-body">
                        <!-- Informações de contato -->
                        <template v-for="contact in contacts[0].contact">
                            <!-- Tipo do contato -->
                            <h4 class="card-title">{{contact.title}}</h4>
                            <!-- Explicação do contato -->
                            <p class="card-text">{{contact.info}}</p>
                        </template>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-3">
                <div class="card p-3 shadow">
                    <div class="card-body text-center">
                        <!-- Título explicativo do formulário -->
                        <h3 class="card-title border-bottom pb-2">{{contacts[0].form.title}}</h3>
                        <div class="row mt-3">
                            <!-- Renderização dos inputs -->
                            <template v-for="input in contacts[0].form.inputs">
                                <!-- Caso o input.type tiver o valor diferente de textarea, então um input será renderizado -->
                                <div class="col-md-6 mb-3" v-if="input.type != 'textarea'">
                                    <input :type="input.type"  class="form-control" :placeholder="input.placeholder">
                                </div>  
                                <!-- Caso o input.type tiver o valor igual a textarea, então um textarea será renderizado -->
                                <div class="col-md-12" v-else>
                                    <textarea :placeholder="input.placeholder" class="form-control mb-3" row="3"></textarea>
                                </div>
                            </template>
                            <!-- Botão de envio dos dados -->
                            <div class="col-md-12">
                                <button class="btn btn-outline-danger btn-block">{{contacts[0].form.buttom.text}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // contacts: Objeto com atributos referentes aos elementos da section Contact. contact.title(Título referente ao contato), contact.info(Informação refente ao título), form.title(Título explicativo do formulário), form.inputs.type(Tipo do input se o type for textarea, o mesmo será renderizado), form.inputs.placeholder(Texto explicativo do input), form.inputs.value(Amazenamento dos dados preenchidos) e form.buttom.text(Texto descritivo do botão de envio) | [{'contact': [{'title': '', 'info': ''}], 'form': {'title': '', 'inputs': [{'type': '', 'placeholder': '', 'value': ''}], 'buttom': {'text': ''}}}]
        props: ['contacts']
    }
</script>