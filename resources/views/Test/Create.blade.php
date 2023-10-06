@extends('layouts.main')
@section('content')
    <div class="container">
     {{-- <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{old('title')}}"
          type="text" name="title" class="form-control" id="title" placeholder="Title">
          @error('title')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="Content" class="form-label">Content</label>
          <textarea type="text" name="content" class="form-control" id="content" placeholder="Content">{{old('content')}}</textarea>
          @error('content')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input  value="{{old('image')}}" type="text" name="image" class="form-control" id="image" placeholder="image">
          @error('image')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category">Category</label>
          <select class="form-select" id="category" name="category_id">
          @foreach ($categories as $category)
            <option 
            {{old('category_id') == $category->id ? 'selected' : ''}}
            value="{{$category->id}}">{{$category->title}}</option>    
          @endforeach
        </select>
        </div>
        <div class="mb-3">
          <select multiple class="form-control" id="tags" name="tags[]">
            @foreach ($tags as $tag)
              <option  value="{{$tag->id}}">{{$tag->title}}</option>    
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Create</button>
      </form> --}}
      <div>
        <div>
          <a href="{{route('test.index')}}" class="btn btn-primary mb-3">Back</a>
        </div>
      </div>
    </div>
@endsection