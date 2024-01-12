@extends('layouts.app')
@section('content')
    <section class="container">
        <h2 class="text-center mt-2">I MIEI PROGETTI</h2>
        <table class="table mt-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="table-light">
                        <th scope="row">
                            <button class="btn btn-primary">
                                <a class=" text-white text-decoration-none" href="{{ route('admin.projects.show', $project->id) }}">Mostra</a>
                            </button>
                        </th>
                        <td><strong> {{ $project->title }}</strong></td>
                        <td> <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Modifica</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger cancel-button">Cancella</button>
                        </td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary mt-3">
            <a class="text-white text-decoration-none" href="{{ route('admin.projects.create') }}">Inserisci un nuovo progetto</a>
        </button>
    </section>
@endsection
