@extends('layouts')

@section('content')
    <h1 class="text-center pt-3">Create you todo List</h1>
   

        <form method="post" action="/todos/create">
            @csrf
            <x-alert />

            <input type="text" class="form-control " name="title" style="height:50px;  border-width: 5px" id="todoname">

            <button type="submit" style="border-radius: 10px; margin-top:20px; position:relative;"
                class="btn btn-primary">Submit</button>
        </form>
        <a class="btn btn-primary" style="position:relative; margin:center; left:40%;" href="/todos"> go back
        </a>

@endsection
