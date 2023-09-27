@component('mail::message')
# Voce se cadastrou neste site

Olá, {{ $user['firstName'] }} {{ $user['lastName'] }}, voce acabou de se registrar nesse site, seja bem vindo.


@endcomponent