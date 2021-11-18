<template>
    <div class="container">
        <div class="row">
            <template v-for="plan in plans">
                <div class="col-md-4 my-3">
                    <!-- Card -->
                    <div class="card text-center text-white">
                        <div class="card-header bg-dark">
                            <!-- Card Título -->
                            <h3>{{plan.title}}</h3>
                        </div>
                        <div class="card-body text-dark">
                            <!-- Card Valor -->
                            <h4 class="card-title">{{plan.value}}</h4>
                            <!-- Card descrição -->
                            <p class="card-text">{{plan.desc}}</p>
                            <ul class="list-group mb-1">
                                <!-- Beneficios do plano -->
                                <template v-for="benefit in plan.benefits">
                                    <li class="list-group-item">
                                        <i :class="benefit.icon"></i> {{benefit.desc}}
                                    </li>
                                </template>
                            </ul>
                            <!-- Botão para fazer a compra da plano -->
                            <a class="btn btn-danger btn-block" :href="plan.button.link">
                                {{plan.button.desc}}
                            </a>
                        </div>
                        <!-- Card rodapé -->
                        <div class="card-footer text-dark">
                            {{plan.footer}} 
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
    export default {
        // plans: Objeto com atributos section plans. title(Nome do plano), value(Valor da assinatura do plano), desc(Descrição do plano), benefits.icon(Classe de um icone fontawesome), benefits.desc(Recurso incluido ou não no plano), button.desc(Texto descritivo do botão), button.link(Link de referência do botão) e footer(Periodo de assinatura) | [{'title': '', 'value': '', 'desc': '', 'benefits': [{'icon': '', 'desc': ''}], 'button': {'desc':  '', 'link': ''}, 'footer': ''}]
        props: ['plans']
    }
</script>