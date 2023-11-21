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
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>
                                <select class="form-control w-25 role-select" aria-label="Default select example"
                                    name="role" data-user-id="{{ $user->id }}">
                                    @foreach ($roles as $role)
                                        <option {{ $user->role == $role->id ? 'selected' : '' }}
                                            value="{{ $role->id }}">
                                            {{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <div class="btn-group row ">
                                    <div class="ml-3 ">
                                        <form id="updateForm{{ $user->id }}"
                                            action="{{ route('admin.user.update', $user->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" name="role" id="role{{ $user->id }}"
                                                value="{{ $user->role }}">
                                            <button type="submit" class="invisible">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div class="ml-1">
                                        <form action="{{ route('admin.user.delete', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-dark">
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






{{-- --}}
