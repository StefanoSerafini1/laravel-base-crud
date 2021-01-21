{{-- implementazione classe show --}}
@extends('layouts.main')

@section('content')
    
    <main>

        <div>
           <h1>classe singola</h1>
           <h3>ID: {{ $classroom->id }}</h3>
           <h4>NAME: {{ $classroom->name }}</h4>
           <p>DESCRIPTION: {{ $classroom->description }}</p>
        </div>

    </main>
@endsection