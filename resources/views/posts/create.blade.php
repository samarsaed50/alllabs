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
<form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
{{csrf_field()}}
Title :- <input type="text" name="title" value="{{old('title')}}">
<br><br>
Description :- 
<textarea name="description"> {{old('description')}}</textarea>
<br>
<br>
add image:<input type="file" name="imge">
<br>
<br>
Post Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Create" class="btn btn-success">
</form>

@endsection