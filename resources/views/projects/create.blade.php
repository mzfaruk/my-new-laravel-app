@extends('app')

@section('content')
<h2>Create a Project</h2>
<form action="/create-project" method="POST">
    @csrf
    <p>
        <label for="name"></label><input value="{{old('name')}}" type="text" name="name" id="name" placholder="type project title">
    <br/><span style="color:red">{{$errors->first('name')}}</span>
    
    </p>
    <p>
      <label for="body"></label><textarea name="body" id="body" cols="30" rows="10">{{old('body')}}</textarea>
      <br/><span style="color:red">{{$errors->first('body')}}</span>
    </p>
    <button type="submit">Create</button>
</form>


@endsection