@extends('layouts.app');

@section('content');

<div class="container">
    <h2>Skill Details</h2>

    <!-- @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
        @endforeach
    @endif -->
    <form action="{{url('/skill')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="skill name" class="form-control @error('school_name') is-invalid @enderror">
        @error('school_name')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="text" name="rating" placeholder="skill rating">
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>

@endsection