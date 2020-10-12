@extends('posts-manager::layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title text-center bioshop-title">{{ $post->title }}
                <div style="padding: 10px 0; font-size: 15px;" class="text-center text-small"><strong>Catégorie: </strong><em>{{ $post->category->name }}</em></div>
            </h1>


            <div class="card mb-3">
                <img class="card-img-top" src="{{ asset("vendor/posts-manager/images/".$post->image) }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{ $post->content }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
