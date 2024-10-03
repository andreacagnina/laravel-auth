@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1>Aggiungi un nuovo progetto</h1>
                </div>
            </div>
            <div class="col">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Titolo</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea name="description" id="description-project" cols="30" rows="5" value="{{ old('description') }}"
                                class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}"
                                class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary my-4">INVIA</button>
                </form>
            </div>
        </div>
    </div>
@endsection
