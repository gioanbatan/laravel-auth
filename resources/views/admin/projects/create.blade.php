@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mt-3">Creazione di un nuovo progetto</h2>

        <div class="row">
            <div class="col-10">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                            class="form-control
                        @error('title')
                        is-invalid
                        @enderror">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" rows="10"
                            class="form-control 
                        @error('description')
                        is-invalid
                        @enderror
                        ">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
