@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Education Details</h2>

    <!-- @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
        @endforeach
    @endif -->
    <div class="row">
        <div class="offset-lg-6 col-lg-6">
            <form action="{{url('/education')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name of Institution</label>
                    <input type="text" class="form-control" name="institution">
                </div>
                <div class="form-group">
                    <label for="">Degree Title</label>
                    <input type="text" class="form-control" name="degree">
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
    <!-- <form action="{{url('/education')}}" method="post">
        @csrf
        <input type="text" name="school_name" placeholder="school name" class="form-control @error('school_name') is-invalid @enderror">
        @error('school_name')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input type="text" name="school_location" placeholder="school location">
        <input type="text" name="degree" placeholder="degree">
        <input type="text" name="field_of_study" placeholder="field of study">
        <input type="date" name="graduation_start_date">
        <input type="date" name="graduation_end_date">
        <button type="submit" class="btn btn-info">Submit</button>
    </form> -->
</div>

@endsection