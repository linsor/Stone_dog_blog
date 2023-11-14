@extends('layouts.admin')
@section('content')
    <div class="container">
        <div>
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="NamePost" class="form-label">NamePost</label>
                    <input value="{{ old('NamePost') }}" type="text" name="NamePost" class="form-control" id="NamePost"
                        placeholder="NamePost">
                    @error('NamePost')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea id="summernote" name="Content"></textarea>
                    @error('Content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group w-50">
                    <label for="exampleInputFile">Загрузка изображения</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name = 'PostImage'>
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="NameGame">NameGame</label>
                    <select class="form-control" id="NameGame" name="NameGame" aria-label="Default select example">
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}">{{ $game->GameName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category">Категории</label>
                    <select class="form-control w-50" id="category" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Create</button>
            </form>
            <div>
                <div>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-primary mb-3">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--                 <div class="mb-3">
                    <label for="PostImage" class="form-label">PostImage</label>
                    <input value="{{ old('PostImage') }}" type="text" name="PostImage" class="form-control"
                        id="PostImage" placeholder="PostImage">
                    @error('PostImage')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
--}}
