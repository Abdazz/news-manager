@component('mail::message')
# Nouvelle catégorie

Bonjour !
Une nouvelle catégorie a été ajoutée sur votre site !

## La catégorie: "{{ $category }}"


Thanks,<br>
{{ config('app.name') }}
@endcomponent
