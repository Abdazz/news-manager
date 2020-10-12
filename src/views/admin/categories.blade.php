@extends('posts-manager::admin.default')

@section('content')

    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title text-center">
                    <h1>Liste des Catégories</h1>
                </div>
            </div>
        </div>
    </div>

@include("posts-manager::admin.categories-list")

@endsection
