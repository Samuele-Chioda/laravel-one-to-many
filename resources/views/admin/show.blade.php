@extends('layouts.app')

@section('title', 'Project Details')

@section('content')
<div class="container my-5">
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    @if ($project->type)
        <p><strong>Type:</strong> {{ $project->type->name }}</p>
    @endif

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
</div>
@endsection
