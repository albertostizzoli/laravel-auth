@extends('layouts.app')
@section('content')
    <h2 class="text-center mt-2">CREA UN NUOVO PROGETTO</h2>
    <section class="container">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required  value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" required maxlength="200" minlength="3">
                    {{ old('description', $project->description) }}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="technologies">Tecnologie</label>
                <input type="" class="form-control @error('technologies') is-invalid @enderror" name="technologies"
                    id="technologies" value="{{ old('technologies', $project->technologies) }}">
                @error('technologies')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </section>
@endsection
