@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <div class="btn-group row ">
                                    <div class="ml-3">
                                        <form action="#" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-dark ">
                                                <i class="fas fa-trash text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection


{{$user->role}}