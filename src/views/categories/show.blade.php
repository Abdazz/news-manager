
@extends('posts-manager::layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title text-center bioshop-title">{{ $category->name }}
            <div class="text-center">

            </div>
            <div class="mt-10">
                <div>
                    {{-- <form id="delete-form" action="{{ route('categories.destroy', $category) }}" method="POST" class="d-none">
                        @csrf
                        {{ method_field("DELETE") }}
                    </form> --}}

                </div>
                <div>

                </div>
            </div>


        </div>
        <div class="col-md-12">
            @if(count($category->posts)>0)
            <div class="card-columns">
                @foreach($category->posts as $post)
                    @include('posts-manager::layouts.post')
                @endforeach
            </div>
            @else
            <div style="margin-top: 50px;" class="text-center mx-auto d-flex row justify-content-center ">
                <div class="alert alert-info" role="alert">Cette catégorie ne comporte pas de posts</div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
