@extends('layouts.main')
@section('content')
    <div class="container mt-3 ">
        <div class="col-md-8 mx-auto">
            <img src="{{asset('storage/' . $post->PostImage) }} " style="max-width: 700px">
        </div>
        <div class="mt-3">
            <div>
                <h1>{{ $post->NamePost }}</h1>


            </div>
            <div>
                {!! $post->Content !!}
            </div>
        </div>
        
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
