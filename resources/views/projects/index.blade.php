@extends('app')

@section('content')
<h2>Projects<a href="/create-project">Create Project</a></h2>
<ul>
    @foreach($projects as $project)
    <li>
        <a href="/project/{{$project->id}}">
        <h3>{{$project->name}}</h3>
        {{$project->body}}
        </a>
    </li>
    @endforeach

</ul>
{{$projects->links()}}
@endsection