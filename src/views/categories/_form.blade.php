@csrf

    <div class="form-group mx-sm-3">
            <input id="name" placeholder="Nom de la catégorie" type="text" class="form-control form-control-lg"  name="name" value="{{  old('name') ?? $category->name  }}" required  autofocus>

    </div>
        <button type="submit" class="btn btn-primary btn-lg">
            Valider
        </button>

