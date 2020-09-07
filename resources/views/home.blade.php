@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4 ">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>All Options Here </h5>
                </div>
                <div class="card-body">
                    <div class="row options">
                        <div class="col-lg-4 p-2">
                            <div class="card border-0">
                                <a href="{{route('user-detail.index')}}" class="card-link">
                                  <div class="card-header">
                                    <h4 class="">Personal Information</h4>
                                  </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2">
                            <div class="card border-0">
                                <a href="{{route('education.index')}}" class="card-link">
                                  <div class="card-header">
                                    <h3 class="">Education</h3>
                                  </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2">
                            <div class="card border-0">
                                <a href="{{route('experience.index')}}" class="card-link">
                                    <div class="card-header">
                                        <h3 class="">Work Esperience</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2">
                            <div class="card border-0">
                                <a href="#" class="card-link">
                                  <div class="card-header">
                                    <h3 class="">Projects</h3>
                                  </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2">
                            <div class="card border-0">
                                <a href="#" class="card-link">
                                  <div class="card-header">
                                    <h3 class="">Additional Information</h3>
                                  </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 p-2">
                            <div class="card border-0">
                                <a href="#" class="card-link">
                                  <div class="card-header">
                                    <h3 class="">Add Signature</h3>
                                  </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Awesome Templates</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-3 p-2">
                            <div class="card border-0">
                              <img src="https://cdn-images.zety.com/templates/zety/cascade-3-duo-blue-navy-21.png" class="card-img-top" alt="..." >
                            </div>
                        </div>
                        <div class="col-lg-3 p-2">
                            <div class="card border-0">
                              <img src="https://cdn-images.zety.com/templates/zety/diamond-21-duo-silver-dark-999.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-3 p-2">
                            <div class="card border-0">
                              <img src="https://cdn-images.zety.com/templates/zety/cascade-3-duo-blue-navy-21.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-3 p-2">
                            <div class="card border-0">
                              <img src="https://cdn-images.zety.com/templates/zety/diamond-21-duo-silver-dark-999.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-3 p-2">
                            <div class="card">
                              <img src="https://cdn-images.zety.com/templates/zety/cascade-3-duo-blue-navy-21.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-3 p-2">
                            <div class="card">
                              <img src="https://cdn-images.zety.com/templates/zety/muse-2-classic-blue-navy-172.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
