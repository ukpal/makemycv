@extends('layouts.app');

@section('content');

<div class="container">
    <h2>Skill Details</h2>

    <!-- @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
        @endforeach
    @endif -->
    <form action="{{route('skill.update', $skills)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="skill name" value="{{$skills->name}}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="text" name="rating" placeholder="skill rating" value="{{$skills->rating}}">      
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>

@endsection