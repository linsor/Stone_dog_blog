@extends('layouts.main')
@section('content')
<div class="container">
    <form action="{{route('test.update', $user->id)}}" method="post">
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" 
        id="name" placeholder="name" value="{{$user->name}}">
      </div>
      <div class="mb-3">
        <label for="UserAvatar" class="form-label">UserAvatar</label>
        <textarea type="text" name="UserAvatar" class="form-control"
         id="UserAvatar" placeholder="UserAvatar">{{$post->UserAvatar}}</textarea>
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">role</label>
        <input type="text" name="role" class="form-control"
         id="role" placeholder="role" value="{{$user->role}}">
      </div>
      
        
        </select>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Edit</button>
    </form>
    <div>
      <div>
        <a href="{{route('user.index')}}" class="btn btn-primary mb-3">Back</a>
      </div>
    </div>
  </div>
@endsection
