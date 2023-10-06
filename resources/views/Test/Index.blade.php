@extends('layouts.main')
@section('content')

    <div class="container">
        <div>
            <a href="{{route('test.create')}}" class="btn btn-primary mb-3">Create</a>
        </div>
            <p>{{$users->id}}. {{$users->name}} </p>
    </div>
@endsection
