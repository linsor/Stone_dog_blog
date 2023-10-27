@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="card mb-3" style="max-width: 540px;">
                    <a href="{{ route('admin.post.edit', $post->id) }}">
                        <div class="row g-0 md-3">
                            <div class="col-md-4">
                                <img src="{{ asset($post->PostImage) }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->NamePost }}</h5>
                                    <p class="card-text">{{ $post->Content }} </p>
                                    <p class="card-text">
                                        <small class="text-body-secondary">
                                            @foreach ($games as $game)
                                                @if ($post->NameGame == $game->id)
                                                    {{ $game->GameName }}
                                                @else
                                                @endif
                                            @endforeach
                                        </small>
                                    </p>
                                    <div class="btn-group row ">
                                        <button href="{{ route('admin.post.edit', $post->id) }}" type="button" class="btn btn-primary row gx-3">
                                            Edit
                                        </button>

                                        <form action="{{ route('post.delete', $post->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-primary">
                                        </form>
                                    </div>




                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
