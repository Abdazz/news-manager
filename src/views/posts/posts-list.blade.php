<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" >
            <h1 class="title text-center bioshop-title">Nos posts
            </h1>
        </div>

        @if(session()->has("message"))
            <div class="alert alert-info">
                {{ session("message") }}
            </div>
        @endif

        <div class="col-md-12">
            <div class="card-columns">
                @foreach($posts as $post)
                    @include('posts-manager::layouts.post')
                @endforeach
            </div>
            <div style="margin-top: 30px;" class="text-center mx-auto d-flex row justify-content-center ">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
</div>
