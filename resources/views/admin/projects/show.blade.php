@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="contant">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrizione</th>
                                <th>Slug</th>
                                <th>Dettagli</th>
                                <th>Inizio</th>
                                <th>Fine</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ullam consectetur
                                    expedita consequuntur atque itaque reiciendis officiis hic aliquid, dolores vitae
                                    suscipit nulla at laborum inventore quos minus. Eius, minus.</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>
                                <td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
