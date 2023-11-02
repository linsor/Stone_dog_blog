@extends('layouts.admin')
@section('content')
    <div class="container">
        <div>
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="NamePost" class="form-label">Title</label>
                    <input type="text" name="NamePost" class="form-control" id="NamePost" placeholder="NamePost"
                        value="{{ $post->NamePost }}">
                </div>
                <div class="form-group">
                    <textarea id="summernote" name="Content">{{$post->Content}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="PostImage" class="form-label">PostImage</label>
                    <input type="text" name="PostImage" class="form-control" id="PostImage" placeholder="PostImage"
                        value="{{ $post->PostImage }}">
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
