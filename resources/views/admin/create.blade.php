@extends('layouts.app')

@section('title', 'Add New Project')

@section('content')
<div class="container my-5">
    <h1>Add New Project</h1>
    <form method="POST" action="{{ route('admin.projects.store') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="type_id
