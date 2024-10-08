@extends('layouts.app')
@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h2>Contenuto pubblico</h2>
                </div>
                @guest
                    Non sei loggato
                @else
                    Sei loggato
                @endguest
            </div>
        </div>
    </div>
@endsection
