@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="card mb-3" style="max-width: 540px;">
                    <a href="{{ route('admin.post.show', $post->id) }}">
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
                                    <div class="btn-group row ">
                                        <div class="ml-3">
                                            <form action="{{ route('post.delete', $post->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="border-0 bg-dark ">
                                                    <i class="fas fa-trash text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </div>

                                        <div class="ml-1 ">
                                            <form action="{{ route('admin.post.edit', $post->id) }}" method="get">
                                                @csrf
                                                <button type="submit" class="border-0 bg-dark ">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


{{--                                         <div>
                                            <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary row mx-0 mt-2">
                                                Edit
                                            </a>
                                        </div> --}}
