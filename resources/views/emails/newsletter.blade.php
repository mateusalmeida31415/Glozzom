@component('mail::message')
# Olá  {{$name}}

Seja bem-vindo a nossa newsletter!!<br> 
Todas semana enviamos informações importantes para o desenvolvimento de sua carreira.<br> 
Então fique atento, não vai que perde nada!<br>
Até a próxima..<br>

@component('mail::button', ['url' => 'http://glozzom.test/'])
Visite nosso site
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
