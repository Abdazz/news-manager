@csrf

    <div class="form-group mx-sm-3">
            <input id="name" placeholder="Nom de la catégorie" type="text" class="form-control form-control-lg"  name="name" value="{{  old('name') ?? $category->name  }}" required  autofocus>

            {{-- @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
    </div>
        <button type="submit" class="btn btn-primary btn-lg">
            Valider
        </button>

