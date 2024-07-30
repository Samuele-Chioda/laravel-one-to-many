@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container my-5">
    <h1>Edit Project</h1>
    <form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $project->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="type_id">Type
