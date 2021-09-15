@extends('layouts')

@section('content')
    <h1 class="text-center pt-3">Edit your todo List</h1>
   

        <form method="post" action="{{ route('todo.update',$todo->id) }}">
            @csrf
            @method('patch')
            <x-alert />

            <input type="text" class="form-control " name="title_update" value="{{ $todo->title }}" style="height:50px;  border-width: 5px" >

            <button type="submit" style="border-radius: 10px; margin-top:20px; position:relative;"
                class="btn btn-primary">Update</button>
        </form>
        <a class="btn btn-primary" style="position:relative; margin:center; left:40%;" href="/todos"> go back
        </a>

@endsection
