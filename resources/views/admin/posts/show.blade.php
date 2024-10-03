@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="contant">
                    dettaglio di questo post {{ $post->title }}
                </div>
            </div>
        </div>
    </div>
@endsection
