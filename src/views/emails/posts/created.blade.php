@component('mail::message')
# Nouveau article

Bonjour, un nouvau post vient d'etre créé sur votre site !

## Titre du post
<div>
    {{ $title }}
</div>

@component('mail::button', ['url' => url("/posts/".$post_id)])
Voir l'article
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
