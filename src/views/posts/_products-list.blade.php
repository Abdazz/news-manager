<div class="container">
    <div class="row justify-content-center">
        <h1 class="title text-center bioshop-title">Nos posts </h1>
        <div class="col-md-12">

            <div class="card-columns">
                @foreach($posts as $post)
                    @include('layouts.post')
                @endforeach
            </div>
            <div style="margin-top: 30px;" class="text-center mx-auto d-flex row justify-content-center ">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
</div>
