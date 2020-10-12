@csrf
<div class="row">
<div class="col-md-5">
    <div>
        <img id="preview" src="{{ asset("vendor/posts-manager/images/".getImageName($post->image)) }}" alt="" class="img-thumbnail">
    </div>
    <div class="mt-7">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="fr" name="image" >
            <label class="custom-file-label" for="customFileLang">Sélectionner une image </label>
        </div>
    </div>
</div>
<div class="col-md-7">
    <div class="form-group">
        <label for="title" class="form-label text-md-right">{{ __('Titre') }}</label>
            <input id="title" type="text" class="form-control " name="title" value="{{ old('title') ?? $post->title }}" >
    </div>

    <div class="form-group">
        <label for="slug" class="form-label text-md-right">Slug</label>
            <input id="slug" type="text" class="form-control " name="slug" value="{{ old('slug') ?? $post->slug }}"  >
    </div>

    <div class="form-group">
        <label for="category" class="form-label text-md-right">{{ __('category') }}</label>
            <select id="category_id" class="form-control " name="category_id"  >
                @foreach($categories as $category)
                    <option {{  (isset($post) && $post->category==$category) ? "selected" : ""  }} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
    </div>

    <div class="form-group">
        <label for="content" class="form-label text-md-right">Contenu</label>
            <textarea id="content" rows="10" class="form-control " name="content"  >{{ old('content') ?? $post->content }}</textarea>


    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary btn-block btn-lg">
                Valider
            </button>
        </div>
    </div>
</div>


</div>
