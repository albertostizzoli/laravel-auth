@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description}}</p>
        <p>Tecnologie usate: {{$project->technologies}}</p>
        <div>
            <img class="w-50" src="{{asset('storage/'. $project->image)}}" alt="{{$project->title}}">
        </div>
        <button class="btn btn-primary d-inline-block">
            <a class="text-white text-decoration-none" href="{{ route('admin.projects.edit', $project->id) }}">Modifica</a>
        </button>

        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger cancel-button">Cancella</button>
        </form>
        @include('partials.modal_delete')
    @endsection
