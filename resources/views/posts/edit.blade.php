@extends('layouts.app')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
</ul>
@endforeach
</div>
@endif
<form method="post" action="{{route('posts.update',$post->id)}}">
{{csrf_field()}}
Title :- <input type="text" name="title" value="{{$post->title}}">
<br><br>
Description :- 
<textarea name="description">{{$post->description}}</textarea>
<br>
<br>
Post Creator
<select class="form-control" name="user_id" >
@foreach ($users as $user)
    <option value="{{$user->id}}" {{($user->id == $post->user->id) ? "selected='selected'" : ''}}>{{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Update" class="btn btn-success">
</form>

@endsection