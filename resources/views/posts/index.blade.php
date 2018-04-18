@extends('layouts.app')
@section('content')
<div class="row">
<div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>All Posts </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('posts.create') }}">Create Post</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="20%">Title</th>
                        <th width="15%">slug</th>  
                        <th width="15%">image</th>                       
                        <th width="20%">Posted by</th>
                        <th width="15%">Created At</th>
                        <th width="15%">Action</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                    <td class="table-text"> 
                    <div>
                    {{$post->title}}
                    </div>
                    </td>
                    <td class="table-text"> 
                    <div>
                    {{$post->slug}}
                    </div>
                    </td>
                    <td> 
                    <div>
      <img src="storage/app/images{{$post->imge}}">
                    </div>
                    </td>
                    <td class="table-text"> 
                    <div>
                    {{$post->user->name}}
                    </div>
                    </td>
                    <td class="table-text"> 
                    <div>
                    {{$post->created_at}}
                    </div>
                    </td>
                    <td> 
<a href="{{ route('posts.show', $post->id) }}" ><button type="button" class="btn btn-info">view</button></a>
<a href="{{ route('posts.edit', $post->id) }}" ><button type="button" class="btn btn-primary">Edit</button></a>
<a href="{{ route('posts.delete', $post->id) }}"  onclick="return confirm('Are you sure to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
    </table>
    </div>
    </div>
</div>
</div>
<div class="panel-heading" style="display:flex; justify-content:center;align-items:center;">
{{$posts->links()}}
</div>
@endsection