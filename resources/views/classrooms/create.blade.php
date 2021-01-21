{{-- implementazione metodo create --}}

@extends('layouts.main')

@section('content')
    <div class="containertot mb-5">
        <h1>Create a new Class</h1>

        <form action="{{ route('classrooms.store')}}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Name of classroom</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Description of classroom</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="brn btn-primary" value="create">
            </div>
        </form>
    </div>
@endsection