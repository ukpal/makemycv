@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Work Details</h2>

    <!-- @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
        @endforeach
    @endif -->
   <!--  <form action="{{route('experience.update', $experiences)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="job_title" placeholder="job title" value="{{$experiences->job_title}}" class="form-control @error('job_title') is-invalid @enderror">
        @error('job_title')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="text" name="employer" placeholder="employer" value="{{$experiences->employer}}">
        <input type="text" name="city" placeholder="city" value="{{$experiences->city}}">
        <input type="text" name="state" placeholder="state" value="{{$experiences->state}}">
        <input type="date" name="start_date" value="{{$experiences->start_date}}">
        <input type="date" name="end_date" value="{{$experiences->end_date}}">
        <button type="submit" class="btn btn-info">Submit</button>
    </form> -->
    <div class="row">
        <div class="offset-lg-6 col-lg-6">
            <form action="{{route('experience.update', $experiences)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Name of Company</label>
                    <input type="text" class="form-control" name="company" value="{{$experiences->company}}">
                </div>
                <div class="form-group">
                    <label for="">Job Title</label>
                    <input type="text" class="form-control" name="job_title" value="{{$experiences->job_title}}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Start Date</label>
                      <input type="date" class="form-control" name="start_date" value="{{$experiences->start_date}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">End Date</label>
                      <input type="date" class="form-control" name="end_date" value="{{$experiences->end_date}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Summary</label>
                    <!-- <input type="text" class="form-control" name="degree"> -->
                    <textarea class="form-control" id="" rows="3" name="summary">{{$experiences->summary}}</textarea>
                </div>
                <button type="submit" class="btn btn-info">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection