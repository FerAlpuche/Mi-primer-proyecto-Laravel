    @csrf

    @if($project->image)

    <img class="card-img-top mb-2" src="/storage/{{ $project->image}}" alt="{{ $project->title }} ">

    @endif

    <div class="custom-file mb-2">
        <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
