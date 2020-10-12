@extends('posts-manager::layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="title text-center bioshop-title">Les catégories</h1>
        <div class="col-md-12">
            @include("posts-manager::categories.categories")
        </div>
    </div>
</div>
@endsection
