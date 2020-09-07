@extends('layouts.app');

@section('content')


<!-- <div class="container">
	<h2>Welcome to cv Builder</h2>
    <a class="btn btn-primary" href="{{route('user-detail.create')}}">Build Now</a>
</div> -->

<div class="row mx-0 w-100 align-items-center text-center" id="banner">
    <div class="col">
        <p class="display-4 font-weight-bold text-primary">LRV Resume Builder</p>
        <p class="display-4 font-weight-bold text-primary">Make a Resume Online—Quick & Easy</p>
        <a class="btn btn-lg rounded-pill btn-primary" href="{{route('home')}}">Build Resume Now</a>
    </div>
</div>
<!-- <section class=" bg-light-blue text-center">
         <p class="text-center ">I found an article about how to write a professional resume on Zety. Then I discovered the application. It's useful and simple to use. It's not a free resume builder, but I guess you can't have everything.</p>
         <p class="text-center mb-0-phone text-xlarge text-bold">Thomas Freeman</p>
</section> -->
<div class="row mx-0 w-100 remark align-items-center" style="background-color: #e3f2fd;">
    <blockquote class="blockquote text-center container ">
      <p class="mb-lg-4">I found an article about how to write a professional resume on LVL. Then I discovered the application. It's useful and simple to use. It's not a free resume builder, but I guess you can't have everything.</p>
      <footer class="blockquote-footer"> <cite title="Source Title">Thomas Freeman</cite></footer>
    </blockquote>
</div>

@endsection