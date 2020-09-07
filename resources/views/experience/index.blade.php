@extends('layouts.app')

@section('content')


<!-- <div class="container">
	<h2>Work Summery</h2>
    @foreach($experiences as $e)
    <p>
        {{$e->job_title}} | ({{$e->start_date}} - {{$e->end_date}}) <br>
        <a href="{{route('experience.edit',$e)}}" class="btn btn-sm btn-info">Edit</a>
        <form action="{{route('experience.destroy', $e)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </p>
    @endforeach
    <a class="btn btn-primary" href="{{route('experience.create')}}">Add New</a>
</div> -->

<div class="container">
    <h2 class="text-center my-lg-3">Work Summery</h2>
    <div class="row" style="min-height: 60vh">
        @foreach($experiences as $e)
        <div class="col-12 p-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Company:</span> {{$e->company}}</h5>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Job Title:</span> {{$e->job_title}}</h5>
                <div class="row">
                    <div class="col">
                        <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Start Date:</span> {{$e->start_date}}</h5>
                    </div>
                    <div class="col">
                        <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">End Date:</span> {{$e->end_date}}</h5>
                    </div>
                </div>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Summary:</span> {{$e->summary}}</h5>
                <div class="row justify-content-end">
                    <div class="col-lg-1 text-center">
                        <a href="{{route('experience.edit',$e)}}" class="btn btn-info">Edit</a>
                        
                    </div>
                    <div class="col-lg-1 text-center">
                        <form action="{{route('experience.destroy', $e)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
              </div>             
            </div>
        </div>
        @endforeach
        <div class="col-12">
            <a class="btn btn-primary" href="{{route('experience.create')}}">Add New</a>
        </div>
        
    </div>
</div>

@endsection