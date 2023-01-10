@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Progetti realizzati in Boolean</h2>

        <ul>
            @foreach ($projects as $project)
                <li>
                    <h3>
                        {{ $project->title }}
                    </h3>
                    <p>
                        {{ $project->description }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
