@extends('layouts')

@section('content')
<div>
    <a class="btn btn-info" href="/todos/create"> Create New Todo
    </a>

</div>
<x-alert />

@foreach ($todos as $todo)

<div class="ul_todo">
    
    <ul >
        <li>
            <h2>{{ $todo->title }} <a class="btn btn-primary" href="/todos/{{ $todo->id }}/edit"> Edit
            </a>
             </h2> 
        </li>
    </ul>
    

</div>


    
@endforeach
<style>
    .ul_todo {
  margin: 20px;
  
}
    </style>
@endsection