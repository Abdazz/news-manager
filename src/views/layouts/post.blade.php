<div class="card">
    <img class="card-img-top" src="{{ asset("vendor/posts-manager/images/".$post->image) }}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title post-title text-center">{{ $post->title }}</h4>
        <h6 class="text-center"><strong>Catégorie: </strong><em>{{ $post->category->name ?? "Non Catégorisé" }}</em></h6>
        <p class="card-text">{{ Str::limit( $post->contnet , 100)}}</p>
        <div class="text-center ">

            <a class="stretched-link" href="{{ route('posts.show', $post) }}"></a>
        </div>
    </div>
</div>
