@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="contant">
                    <strong>Titolo:</strong> {{ $post->title }} <br>
                    <strong>Contenuto:</strong> {{ $post->content }}

                </div>
            </div>
        </div>
    </div>
@endsection
