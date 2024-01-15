@extends('layouts.app')
@section('content')
    <h2 class="text-center mt-2">CREA UN NUOVO PROGETTO</h2>
    <section class="container">
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST">
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
                <label for="url">Repo GitHub</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                    required maxlength="200" minlength="3">
                @error('url')
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
            <div class="mb-3">
                <div class="mb-2">
                    <img class="w-25" src="{{asset('storage/'. $project->image)}}" alt="{{$project->title}}">
                </div>
                <label for="image">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{old('image')}}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </section>
@endsection
