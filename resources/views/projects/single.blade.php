@extends('app')

@section('content')

<h1>{{$project->name}}</h1>
    <p>{{$project->body}}</p>

    <a href="/project/{{$project->id}}/edit">Edit</a>
    <!-- <a href="/project/{{$project->id}}/delete">Delete</a> -->
    
    <form onSubmit="return confirm('Do you want to Delete?')" action="/project/{{$project->id}}/delete" method="POST">
        @csrf
        <button type="submit">Delete</button>

    </form>
    
    <a href="/projects">Back to all projects</a>


@endsection