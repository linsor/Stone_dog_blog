@extends('layouts.main')
@section('content')

    <div class="container">
        <div>
            <a href="{{route('test.create')}}" class="btn btn-primary mb-3">Create</a>
        </div>
        @foreach ($users as $user)
            <div><a href="{{route('test.show', $user->id)}}"> {{$user->id}}. {{$user->name}}</a></div>
        @endforeach

    </div>
@endsection
