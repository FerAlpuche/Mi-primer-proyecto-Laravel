    @csrf

    @if($project->image)

    <img class="card-img-top mb-2" src="/storage/{{ $project->image}}" alt="{{ $project->title }} ">

    @endif

    <div class="input-group mb-3">
        <div class="custom-file">
            <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Elige una imagen</label>
        </div>
    </div>
    <div class="form-group">
         <label for="category_id">Categoria del proyecto</label>
         <select 
          class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
    </div>

    <div class="mb-3">
        <label class="form-label">
            Título del proyecto
        </label>
        <input class="form-control" type="text" name="title" value="{{ old('title', $project->title) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">
            URL del proyecto
        </label>
        <input class="form-control" type="text" name="url" value="{{ old('url', $project->url) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">
            Descripción del proyecto
        </label>
        <textarea class="form-control" type="text" rows="3" name="description">
            {{ old('description', $project->description)  }}
        </textarea>
    </div>
