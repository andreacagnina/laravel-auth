@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="contant">
                    <strong>Titolo:</strong> {{ $project->name }} <br>
                    <strong>Descrizione:</strong> {{ $project->description }} <br>
                    <strong>Descrizione:</strong> {{ $project->start_date }} <br>
                    <strong>Descrizione:</strong> {{ $project->end_date }}
                </div>
            </div>
        </div>
    </div>
@endsection
