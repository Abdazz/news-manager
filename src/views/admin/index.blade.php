
@extends('posts-manager::admin.default')

@section('content')

    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title text-center">
                    <h1>Tous les posts</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Simple Datatable start -->
@include("posts-manager::admin.posts-list")

@endsection
