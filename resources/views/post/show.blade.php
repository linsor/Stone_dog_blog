@extends('layouts.main')
@section('content')
    <div class="container">
        <div>
            <img src="{{asset('storage/' . $post->PostImage) }} " style="max-width: 100px">
        </div>
        <h5>{{ $post->NamePost }}</h5>
        {!! $post->Content !!}
        <p>{{ $post->NameGame }} </p>
    </div>
@endsection
