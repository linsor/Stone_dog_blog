@extends('layouts.main')
@section('content')
    <div class="container">
        <div>
            <img src="{{ asset($post->PostImage) }} " style="max-width: 100px">
        </div>
        <h5>{{ $post->NamePost }}</h5>
        <p>{{ $post->Content }}
        <p>{{ $post->NameGame }} </p>


        <div>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </div>
    </div>
@endsection
