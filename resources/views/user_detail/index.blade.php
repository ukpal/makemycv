@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row" style="min-height: 60vh;">       

        <div class="col">
        	<div class="card">
              <div class="card-header">
                <h2>All Your Details</h2>
              </div>
              <div class="card-body">
                @if($details)
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Full Name:</span> {{$details->fullname}}</h5>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Phone:</span> {{$details->phone}}</h5>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Email: </span> {{$details->email}}</h5>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Address:</span> {{$details->address}}</h5>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Date of Birth:</span> {{$details->dob}}</h5>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Profession:</span> {{$details->profession}}</h5>
                <h5 class="card-title"><span class="mx-lg-3 font-weight-bolder">Summary:</span> {{$details->summary}}</h5>
                <br>
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                <div class="row">
                    <div class="col-lg-1">
                        <a href="{{route('user-detail.edit',$details)}}" class="btn btn-sm btn-info">Edit</a>
                    </div>
                    <div class="col-lg-1">
                        <form action="{{route('user-detail.destroy', $details)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>               
                
                @else

                <h2 class="text-center text-danger">No Information Found</h2>
                <p class="text-center"><a href="{{route('user-detail.create')}}" class="btn btn-primary btn-lg rounded-pill">Insert Your Details</a></p>

                @endif
              </div>
            </div>
  
        </div>
    </div>
</div>

@endsection