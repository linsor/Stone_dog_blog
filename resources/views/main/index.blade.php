@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="card mb-3" style="max-width: 540px;">
                <a href="{{route('main.show', $post->id)}}">
                <div class="row g-0 md-3">
                  <div class="col-md-4">
                    <img src="{{ asset($post->PostImage)}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->NamePost }}</h5>
                      <p class="card-text">{{ $post->Content }} </p>
                      <p class="card-text"><small class="text-body-secondary">{{$post->NameGame}} </small></p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
        <div >
            А НАХУЯ?
        </div>
    </div>
@endsection
