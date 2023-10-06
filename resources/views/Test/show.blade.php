@extends('layouts.main')
@section('content')

    <div class="container">
        <div>
            <div> <P>{{$user->id}}. {{$user->name}} использует:</P> </div>
            <div><h3>{{$accessories->processor->NameProcessor}}</h3> в связке с <h3>{{$accessories->videocard->NameVideoCard}}</h3> </div>

        </div>
    </div>
@endsection
