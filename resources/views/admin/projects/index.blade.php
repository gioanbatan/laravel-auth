@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Progetti realizzati in Boolean</h2>

        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome progetto</th>
                            <th scope="col">Data inserimento</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    <a class="btn btn-primary ms_btn-square-2 rounded-circle"
                                        href="{{ route('admin.projects.show', $project->slug) }}">
                                        <i
                                            class="fa-solid fa-info d-flex justify-content-center align-items-center text-light"></i>
                                    </a>

                                    <a class="btn btn-primary ms_btn-square-2 rounded-circle"
                                        href="{{ route('admin.projects.create') }}">
                                        <i
                                            class="fa-solid fa-pen-nib d-flex justify-content-center align-items-center text-light"></i>
                                    </a>

                                    <a class="btn btn-primary ms_btn-square-2 rounded-circle">
                                        <i
                                            class="fa-solid fa-file-pen d-flex justify-content-center align-items-center text-light"></i>
                                    </a>

                                    <a class="btn btn-danger ms_btn-square-2 rounded-circle">
                                        <i
                                            class="fa-regular fa-trash-can d-flex justify-content-center align-items-center text-light"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
