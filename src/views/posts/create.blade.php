@extends('posts-manager::admin.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout d'un nouveau article</div>

                <div class="card-body p-10">
                    <form class="" method="POST" action="{{ route('posts.store') }}"  enctype="multipart/form-data">
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
