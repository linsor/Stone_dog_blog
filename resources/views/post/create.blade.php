@extends('layouts.main')
@section('content')
    <div class="container">
        <div>
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="NamePost" class="form-label">NamePost</label>
                    <input value="{{ old('NamePost') }}" type="text" name="NamePost" class="form-control" id="NamePost"
                        placeholder="NamePost">
                    @error('NamePost')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Content" class="form-label">Content</label>
                    <textarea type="text" name="Content" class="form-control" id="Content" placeholder="Content">{{ old('Content') }}</textarea>
                    @error('Content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="PostImage" class="form-label">PostImage</label>
                    <input value="{{ old('PostImage') }}" type="text" name="PostImage" class="form-control"
                        id="PostImage" placeholder="PostImage">
                    @error('PostImage')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="NameGame">NameGame</label>
                    <select class="form-control" id="NameGame" name="NameGame" aria-label="Default select example">
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}">{{ $game->GameName }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Create</button>
            </form>
            <div>
                <div>
                    <a href="{{ route('post.index') }}" class="btn btn-primary mb-3">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- --}}
