@extends('app')

@section('content')
<h2>Edit a Project</h2>
<form action="/project/{{$project->id}}/edit" method="POST">
    @csrf
    @method('PUT')
    <p>
        <label for="name"></label><input value="{{$project->name}}" type="text" name="name" id="name" placholder="type project title">
    <br/><span style="color:red">{{$errors->first('name')}}</span>
    
    </p>
    <p>
      <label for="body"></label><textarea name="body" id="body" cols="30" rows="10">{{$project->body}}</textarea>
      <br/><span style="color:red">{{$errors->first('body')}}</span>
    </p>
    <button type="submit">Create</button>
</form>


@endsection