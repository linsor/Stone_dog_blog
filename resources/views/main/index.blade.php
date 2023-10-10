@extends('layouts.main')
@section('content')

    <div class="container">

        <div>
            @foreach ($users as $user)
                <div><a href="{{route('test.show', $user->id)}}"> {{$user->id}}. {{$user->name}}</a></div>
            @endforeach
        </div>

    </div>
@endsection
