<div style="padding: 5px;" class="d-flex p-2">
    <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>
</div>
<div class="card-box mb-30">
    {{-- <div  style="padding-top:20px;" class="row justify-content-center col-md-12 mt-5 mb-3">
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
    </div> --}}
    <div class="pb-20">

        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Nombre de posts</th>
                    <th>Date d'ajout</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @php

                    $id=0;
                @endphp
                @foreach($categories as $category)
                    @php
                    $id++;
                    @endphp
                <tr>
                    <td class="table-plus">{{ $category->name }}</td>
                    <td>{{ count($category->posts) }}</td>
                    <td>{{ $category->created_at->format("d/m/Y") }}</td>
                    <td>
                                <a class="btn btn-success btn-sm" href="{{ route('categories.show', $category) }}"><i class="fa fa-eye"></i> </a>
                                <a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category) }}"><i class="fa fa-edit"></i> </a>
                                <a class="btn btn-danger btn-sm" href="{{ route('categories.destroy', $category) }}"  onclick="event.preventDefault();
                                document.getElementById('{{ $id }}').submit();" > <i class="fa fa-trash"></i> </a>
                                <form id="{{ $id }}" action="{{ route('categories.destroy', $category) }}" method="POST" class="d-none">
                                    @csrf
                                    {{ method_field("DELETE") }}
                                </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 50px;" class="text-center mx-auto d-flex justify-content-center m-20 ">
            {{ $categories->links() }}
        </div>
    </div>
</div>
