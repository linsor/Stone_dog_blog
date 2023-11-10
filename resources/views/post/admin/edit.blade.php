@extends('layouts.admin')
@section('content')
    <div class="container">
        <div>
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="NamePost" class="form-label">Title</label>
                    <input type="text" name="NamePost" class="form-control" id="NamePost" placeholder="NamePost"
                        value="{{ $post->NamePost }}">
                </div>

                <div class="form-group">
                    <textarea id="summernote" name="Content">{{ $post->Content }}</textarea>
                </div>

                <div class="form-group w-50">
                    <div>
                        <img src="{{ asset('storage/' . $post->PostImage) }}" class="img-fluid rounded-start" width="30%"
                            height="30%" alt="...">
                    </div>
                    <label for="exampleInputFile">Загрузка изображения</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name = 'PostImage'>
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <Label form="NameGame">NameGame</Label>
                    <select class="form-control" id = "processor" aria-label="Default select example" name="NameGame">
                        @foreach ($games as $game)
                            <option {{ $game->id == $post->NameGame ? 'selected' : '' }} value="{{ $game->id }}">
                                {{ $game->GameName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category">Категории</label>
                    <select class="form-control w-50" id="category" name="category_id">
                        @foreach ($categories as $category)
                            <option {{ old('category_id') == $category->id ? 'selected' : 'Выберите категорию игры...' }}
                                value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Edit</button>
            </form>
            <div>
                <div>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-primary mb-3">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- --}}
