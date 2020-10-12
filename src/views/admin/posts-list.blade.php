<div style="padding: 5px;" class="d-flex p-2">
    <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>
</div>
<div class="card-box mb-30">

    <div class="pb-20">

        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date d'ajout</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)

                <tr>
                    <td class="table-plus">{{ $post->title }}</td>
                    <td>{{ $post->created_at->format("d/m/Y") }}</td>
                    <td>
                                <a class="btn btn-success btn-sm" href="{{ route('posts.show', $post) }}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', $post) }}"><i class="fa fa-edit"></i></a>

                                <a class="btn btn-danger btn-sm" href="{{ route('posts.destroy', $post) }}" onclick="event.preventDefault();
                                document.getElementById('delete-form').submit();"> <i class="fa fa-trash"></i> </a>
                                <form id="delete-form" action="{{ route('posts.destroy', $post) }}" method="POST" class="d-none">
                                    @csrf
                                    {{ method_field("DELETE") }}
                                </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 20px;" class="text-center mx-auto d-flex justify-content-center m-20 ">
            {{ $posts->links() }}
        </div>
    </div>

</div>
