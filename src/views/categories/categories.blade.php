
<div>

    <ul class="list-group">

        @foreach($categories as $category)

            <a href="{{ route('categories.show', $category) }}" class="list-group-item  list-group-item-action d-flex justify-content-between align-items-center">
                <h4 >{{ $category->name }}</h4>
                <span class="badge badge-primary badge-pill">{{ count($category->posts) }}</span>
            </a>

            @endforeach
        </ul>
        <div style="margin-top: 50px;" class="text-center mx-auto d-flex row justify-content-center ">
            {{ $categories->links() }}
        </div>
    </div>
