<div class="card-box mb-30">
    <div  style="padding-top:20px;" class="row justify-content-center col-md-12 mt-5 mb-3">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
            <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
            <div class="header-search">
                <form wire:submit.prevent="searchByName">
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input  wire:model.lazy="query" type="search" class="form-control search-input" placeholder="Recherchez une catégorie ici...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class=" mb-5" wire:loading >
            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
            </div>
        </div>
            @if(session()->has("message"))
                <div class="alert alert-info">
                    {{ session("message") }}
                </div>
            @endif
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Quantité de Posts</th>
                    <th>Date d'ajout</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="table-plus">{{ $category->name }}</td>
                    <td>{{ count($category->posts) }}</td>
                    <td>{{ $category->created_at->format("d/m/Y") }}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="{{ route('categories.show', $category) }}"><i class="dw dw-eye"></i> Voir</a>
                                <a class="dropdown-item" href="{{ route('categories.edit', $category) }}"><i class="dw dw-edit2"></i> Modifier</a>
                                <a class="dropdown-item" href="{{ route('categories.destroy', $category) }}"  onclick="event.preventDefault();
                                document.getElementById('delete-form').submit();" > <i class="dw dw-delete-3"></i> Supprimer</a>
                                <form id="delete-form" action="{{ route('categories.destroy', $category) }}" method="POST" class="d-none">
                                    @csrf
                                    {{ method_field("DELETE") }}
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 50px;" class="text-center mx-auto justify-content-center m-20 ">
            {{ $categories->links() }}
        </div>
    </div>
</div>
