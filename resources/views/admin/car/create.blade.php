@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Nuovo Posts</h2>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form action="{{route('admin.cars.store')}}" method="POST" >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                {{-- <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div> --}}
                <div class="mb-3">
                    <label for="tags" class="form-label">Seleziona Il colore</label>
                    <select name="tags[]" id="tags">
                        <option value="">Seleziona</option>

                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id}}">{{$tag->name}}</option>
                        @endforeach 
                       
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>
        </div>
    </div>
@endsection