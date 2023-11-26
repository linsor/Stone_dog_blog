@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="card mb-3" style="max-width: 540px;">
                    <a href="{{ route('post.show', $post->id) }}">
                        <div class="row g-0 md-3">
                            <div class="col-md-4">
                                <img src="{{asset('storage/' . $post->PostImage)}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->NamePost }}</h5>
                                    <p class="card-text">{!! substr($post->Content, 0, 50) . '...' !!}</p>
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
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
