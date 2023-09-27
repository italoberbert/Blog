@component('mail::message')
# Contato
Olá, Italo, voce recebeu um email do {{ $user['name'] }}

{{ $user['message'] }}
 
Your order has been shipped!
 
@component('mail::button', ['url' => $url])
Visite meu site no github
@endcomponent

@endcomponent