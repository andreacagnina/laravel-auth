@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1>Aggiungi un nuovo post</h1>
                </div>
            </div>
            <div class="col">
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="content" class="form-label">Contenuto</label>
                            <textarea name="content" id="content" cols="30" rows="15" value="{{ old('content') }}" class="form-control"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary my-4">INVIA</button>
                </form>
            </div>
        </div>
    </div>
@endsection
