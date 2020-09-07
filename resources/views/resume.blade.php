<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .text-theme{ color:  #04dbdb;} 
        .bg-theme{ background: #04dbdb; }
        .heading .row{ height: 300px; }
        .gray-bar{ height: 20px; background: #eaeaea; }
    </style>
  </head>
  <body>

    <section class="heading">
        <div class="row w-100 mx-0 align-items-center bg-theme">
            <div class="col">
                <h2 class="text-capitalize display-2">{{$user->details->fullname}}</h2>
                <h2 class="text-capitalize ">{{$user->details->profession}}</h2>
            </div>
            <div class="col">
                
            </div>
        </div>
    </section>

    <div class="row w-100 mx-0 gray-bar"></div>

    <div class="row  w-100 mx-0 p-2">
        <div class="col-4">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="text-theme">Contact Me</h4>
                    <p class="text-muted font-weight-bold mb-0">Mobile</p>
                    <p class="mb-0">{{$user->details->phone}}</p>
                    <p class="text-muted font-weight-bold mb-0">Email</p>
                    <p class="mb-0">{{$user->details->email}}</p>
                    <p class="text-muted font-weight-bold mb-0">Address</p>
                    <p class="mb-0">{{$user->details->address}}</p>
                    <p class="text-muted font-weight-bold mb-0">Birth Date</p>
                    <p class="mb-0">{{$user->details->dob}}</p>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <h4 class="text-theme">Skills</h4>
                    <p class=" mb-0">PHP, MySQL, Codeigniter, Ajax, JSON, jQuery, HTML, CSS, Bootstrap, REST API, OOP, WordPress, Github </p>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <h4 class="text-theme">Languages</h4>
                    <p class=" mb-0">Bengali, English, Hindi</p>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <h4 class="text-theme">Interest</h4>
                    <p class=" mb-0">Computer, Movie, Music</p>
                </div>
            </div>
            
        </div>
        <div class="offset-1 col-7">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="text-theme">Summary</h4>
                    <p>{{$user->details->summary}}</p>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <h4 class="text-theme mb-3">Education</h4>
                    @foreach($user->education as $e)
          
                        <!-- <span class=" border" style="width: 80px"><hr></span> -->
                        <hr class="mb-0">
                        <span class="float-right bg-white text-theme px-1" style="margin-top: -15px;">{{date("Y", strtotime($e->start_date))}}-{{date("Y", strtotime($e->end_date))}}</span>
          
                    <h3 class="text-capitalize mb-0">{{$e->institution}}</h3>
                    <h4 class="text-theme mb-0">{{$e->degree}}</h4>
                    <p class="mb-4">{{$e->summary}}</p>
                    @endforeach
                </div>
            </div>           
        </div>       
    </div>


    <div class="row mx-0 w-100 bg-theme">
        <div class="col text-center">
            <p class="text-white my-1">Email: {{$user->details->email}}</p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>