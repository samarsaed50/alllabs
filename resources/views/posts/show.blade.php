@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<div class="container-fluid">
<div class="card mb-3">
        <div class="card-header">
         Post info</div>
        <div class="card-body">
          <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $post->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content:</strong>
            {{ $post->description }}
        </div>
    </div>
        </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
      </div>
      </div>
<div class="content-wrapper">
<div class="container-fluid">
<div class="card mb-3">
        <div class="card-header">
         Post Creator info</div>
        <div class="card-body">
          <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $post->user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $post->user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created At:</strong>
            {{ $post->user->created_at->format('l jS \\of F Y h:i:s A') }}
        </div>
    </div>
        </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
      </div>
      </div>
      @endsection