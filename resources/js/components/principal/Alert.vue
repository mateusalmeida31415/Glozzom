<template>
<!-- Mensagem de sucesso -->
    <div class="container" v-if="info.status == '200'">
        <!-- Botão de close do alert -->
        <div class="alert alert-success alert-dismissible fixed-top mt-4 mx-5">
            <button class="close" type="button" data-dismiss="alert" @click="clear()">
                <span>&times;</span>
            </button>
            <!-- Mensagem de sucesso para o usuário final -->
            <p class="mb-0 text-center">{{info.msg}}</p>
        </div>
    </div>

    <!-- Mensagem de erro -->
    <div class="container" v-else-if="infostatus != '200' && info.msg != ''">
        <div class="alert alert-danger alert-dismissible fixed-top mt-4 mx-5">
            <!-- Botão de close do alert -->
            <button class="close" type="button" data-dismiss="alert" @click="clear()">
                <span >&times;</span>
            </button>
            <h3 class="text-center"><strong>Erro!</strong></h3>
            <hr>
            <!-- Mensagens de erro para o usuário final -->
            <ul class="mb-0">
                <li v-for="item in info.msg">{{item[0]}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        // info: Objeto com atributos referentes a alert section. status(Status da requisição de envio de e-mail) e msg(Mensagem de sucesso / array para mensagens de erro) | {'status': '', 'msg': ''}
        props: ['info'],
        methods:{
            //Limpa os dados das variaveis globais do VueX
            clear(){
                this.$store.state.newsletter.msg = ''
                this.$store.state.newsletter.status = ''
            }
        }
    }
</script>