@extends('posts-manager::admin.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier les informations d'un post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', $post) }}"  enctype="multipart/form-data">
                        {{ method_field("PUT") }}
                        @include('posts-manager::posts._form')
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
