<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" >
            <h1 class="title text-center bioshop-title">Nos posts
            </h1>
        </div>
        {{-- <div style="margin-top: -50px;" class="row justify-content-center col-md-12 my-50 mb-3">
            <div  class="col-md-6 mb-30">
                <form wire:submit.prevent="searchByName">
                    <div class="input-group input-group-lg">
                        <input wire:model.lazy="query" type="text" class="form-control" placeholder="Rechercher un post..." aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus="false" >
                        <div class="input-group-append">
                            <span class="input-group-text text-primary" id="basic-addon2" aria-autocomplete="off"><i class="fa fa-search"></i></span>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <div class=" mb-5 mx-auto" wire:loading >

                <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
                </div>

        </div> --}}
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
