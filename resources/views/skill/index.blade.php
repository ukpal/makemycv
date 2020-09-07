@extends('layouts.app');

@section('content');


<div class="container">
	<h2>Skills Summery</h2>
    @foreach($skills as $e)
    <p>
        {{$e->name}} | {{$e->rating}}  <br>
        <a href="{{route('skill.edit',$e)}}" class="btn btn-sm btn-info">Edit</a>
        <form action="{{route('skill.destroy', $e)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </p>
    @endforeach
    <a class="btn btn-primary" href="{{route('skill.create')}}">Add New</a>
</div>

@endsection