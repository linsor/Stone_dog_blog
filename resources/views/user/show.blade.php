@extends('layouts.main')
@section('content')

    <div class="container">
        <div>
             <H2> {{$user->name}}</H2>
            

        </div>

     {{--   <div class="mb-3">
            <label for="category">Процессор</label>
            <select class="form-control w-50" id="category" name="category_id">
                @foreach ($categories as $category)
                    <option {{ $post->category_id == $category->id ? 'selected' : 'Выберите категорию игры...' }}
                        value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="category">Видео Карта</label>
            <select class="form-control w-50" id="category" name="category_id">
                @foreach ($categories as $category)
                    <option {{ $post->category_id == $category->id ? 'selected' : 'Выберите категорию игры...' }}
                        value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div> --}}
    </div>
@endsection
