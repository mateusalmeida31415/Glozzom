<template>
    <header :id="header.id" class="header py-5">  
        <div class="container">
            <div class="row text-center text-white">
                <div class="col">
                    <h2 class="h1">{{header.title}}</h2>
                    <p>{{header.text}}</p>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    // header: Objeto com atributos da header. id(ID da header de acordo com a página), title(Título principal) e text(Texto explicativo) | {'id': '', 'title': '', 'text': ''} 
    export default {
        props: ['header']
    }
</script>