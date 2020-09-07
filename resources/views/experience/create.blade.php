@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Experience Details</h2>

    <!-- @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
        @endforeach
    @endif -->
    <!-- <form action="{{route('experience.store')}}" method="post">
        @csrf
        <input type="text" name="job_title" placeholder="job title" class="form-control @error('job_title') is-invalid @enderror">
        @error('job_title')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="text" name="employer" placeholder="employer">
        <input type="text" name="city" placeholder="city">
        <input type="text" name="state" placeholder="state">
        <input type="date" name="start_date">
        <input type="date" name="end_date">
        <button type="submit" class="btn btn-info">Submit</button>
    </form> -->

    <div class="row">
        <div class="offset-lg-6 col-lg-6">
            <form action="{{route('experience.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name of Company</label>
                    <input type="text" class="form-control" name="company">
                </div>
                <div class="form-group">
                    <label for="">Job Title</label>
                    <input type="text" class="form-control" name="job_title">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Start Date</label>
                      <input type="date" class="form-control" name="start_date">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">End Date</label>
                      <input type="date" class="form-control" name="end_date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Summary</label>
                    <!-- <input type="text" class="form-control" name="degree"> -->
                    <textarea class="form-control" id="" rows="3" name="summary"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection