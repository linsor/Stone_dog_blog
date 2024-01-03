@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)  
                <div class="card mb-3 mt-3 ml-3 bg-dark" style="max-width: 550px; height: 200px;" >
                    <a href="{{ route('post.show', $post->id) }}" class=" text-decoration-none text-white">
                        <div class="row g-0 md-3">
                            <div class="col-md-4">
                                <img src="{{asset('storage/' . $post->PostImage)}}" style="max-width: 150px;" class="img-fluid rounded-start mt-2 ml-2"  alt="...">
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
