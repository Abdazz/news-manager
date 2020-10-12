@extends('posts-manager::admin.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout d'une nouvelle catégorie d'article</div>

                <div class="card-body p-10">
                    <form class="form-inline" method="POST" action="{{ route('categories.store') }}">
                        @include('posts-manager::categories._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
