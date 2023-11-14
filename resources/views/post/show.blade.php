@extends('layouts.main')
@section('content')
    <div class="container">
        <div>
            <img src="{{asset('storage/' . $post->PostImage) }} " style="max-width: 100px">
        </div>
        <h5>{{ $post->NamePost }}</h5>
        {!! $post->Content !!}

        <div>
            <small class="text-body-secondary">
                @foreach ($games as $game)
                    @if ($post->NameGame == $game->id)
                        {{ $game->GameName }}
                    @else
                    @endif
                @endforeach

            </small>
        </div>

        <div>
            <small class="text-body-secondary">
                @foreach ($tags as $tag)
                    <span>{{ $tag->name }}</span>

                    @if (!$loop->last)
                        ,
                    @endif
                @endforeach
            </small>
        </div>

    </div>
@endsection
