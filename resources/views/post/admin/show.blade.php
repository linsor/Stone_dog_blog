@extends('layouts.admin')
@section('content')
    <div class="container">
        <div>
            <img src="{{ asset($post->PostImage) }} " style="max-width: 100px">
        </div>
        <h5>{{ $post->NamePost }}</h5>

        {!! $post->Content !!}

        <small class="text-body-secondary">
            @foreach ($games as $game)
                @if ($post->NameGame == $game->id)
                    {{ $game->GameName }}
                @else
                @endif
            @endforeach
        </small>



        <div>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-primary">
            </form>
        </div>
        <div>
            <button href="{{ route('admin.post.edit', $post->id) }}" type="button" class="btn btn-primary row mx-0 mt-2 ">
                Edit
            </button>
        </div>
    @endsection
