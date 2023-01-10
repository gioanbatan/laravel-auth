@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <h5>{{ $project->created_at }}</h5>
            <p>{{ $project->slug }}</p>
        </div>
        <p class="mt-3">{{ $project->description }}</p>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary ms_squared-2 rounded-circle">
            <i class="fa-solid fa-left-long"></i>
        </a>
    </div>
@endsection
