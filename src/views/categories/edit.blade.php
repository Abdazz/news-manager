@extends('posts-manager::admin.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout d'un nouveau post</div>

                <div class="card-body">
                    <form class="form-inline" method="POST" action="{{ route('categories.update', $category) }}">
                        {{ method_field("PUT") }}
                        @include('posts-manager::categories._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @include('posts-manager::posts._script')
@endsection
