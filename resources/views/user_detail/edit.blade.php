@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center mb-3">Edit Your Details</h2>

    <!-- @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
        @endforeach
    @endif -->
    <div class="row my-lg-3" >
        <div class="offset-lg-3 col-lg-6">
            <form action="{{route('user-detail.update', $details)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Full Name </label>
                    <input type="text" name="fullname" class="form-control" value="{{$details->fullname}}">
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" value="{{$details->email}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Phone</label>
                      <input type="text" name="phone" class="form-control" value="{{$details->phone}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Address </label>
                    <input type="text" name="address" class="form-control" value="{{$details->address}}">
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Date of Birth</label>
                      <input type="date" name="dob" class="form-control" value="{{$details->dob}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Profession</label>
                      <input type="text" name="profession" class="form-control" value="{{$details->profession}}">
                    </div>
                </div>
                <div class="form-group">
                        <label for="">Resume Summary</label>
                        <textarea class="form-control" name="summary" id="" rows="3" >{{$details->summary}}</textarea>
                </div>
                <button type="submit" class="btn btn-info">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection