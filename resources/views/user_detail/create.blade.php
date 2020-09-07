@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="text-center mb-3">Tell Us Something About You</h2>

    <!-- @if(session()->has('errors'))
        @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
        @endforeach
    @endif -->
    <div class="row my-lg-3" >
        <div class="offset-lg-3 col-lg-6">
            <form action="{{url('/user-detail')}}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="">Full Name </label>
                    <input type="text" name="fullname" class="form-control" id="">
                    
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" id="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Phone</label>
                      <input type="text" name="phone" class="form-control" id="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Address </label>
                    <input type="text" name="address" class="form-control" id="">
                    
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Date of Birth</label>
                      <input type="date" name="dob" class="form-control" id="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Profession</label>
                      <input type="text" name="profession" class="form-control" id="">
                    </div>
                </div>
                    <div class="form-group">
                        <label for="">Resume Summary</label>
                        <textarea class="form-control" name="summary" id="" rows="3" ></textarea>
                      </div>
                      <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
    <!-- <form action="{{url('/user-detail')}}" method="post">
        @csrf
        <input type="text" name="fullname" placeholder="fullname">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="phone" placeholder="phone">
        <input type="text" name="address" placeholder="address">
        <input type="date" name="dob" placeholder="">
        <input type="text" name="profession" placeholder="profession">
        <x-form.textarea name="summary"></x-form.textarea>
        <button type="submit" class="btn btn-info">Submit</button>
    </form> -->
</div>

@endsection