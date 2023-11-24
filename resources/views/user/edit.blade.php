@extends('layouts.admin')
@section('content')
    <div class="container">
        <form action="{{ route('admin.user.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="role">Выберите роль пользователя</label>
                <select class="form-control w-25" aria-label="Default select example" id="role" name="role">
                    @foreach ($roles as $role)
                        <option {{ $user->role == $role->id ? 'selected' : '' }} value="{{ $role->id }}">
                            {{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Edit</button>
        </form>
        <div>
            <div>
                <a href="{{ URL::previous() }}" class="btn btn-primary mb-3">Back</a>
            </div>
        </div>
    </div>
@endsection

{{-- --}}


