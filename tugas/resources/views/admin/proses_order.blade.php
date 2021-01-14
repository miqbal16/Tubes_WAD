<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Order</title>
    <style>
      body {
      background-color: rgb(250, 250, 250); 
    }
    </style>
    
  </head>
  <body>
    
    {{-- navbar --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="margin:auto; font-weight: bold;">
          <li class="nav-item active">
            <button type="button" onclick="location.href='{{route('myAdmin')}}'" class="btn btn-primary">Customer Page</button>          <li class="nav-item active" style="margin-left: 60px">
              <a class="nav-link" href="/car_list" style="color: #555555">CAR <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active" style="margin-left: 60px">
              <a class="nav-link" href="/ulasan" style="color: #555555">ULASAN <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active" style="margin-left: 60px">
              <a class="nav-link" href="/history" style="color: #555555">RENT HISTORY<span class="sr-only"></span></a>
            </li>
        </ul>
      </div>
    </nav>
      {{-- card --}}
      
      
      <div class="container">
        <h2 class="title" style="text-align:center; font-size: 23px; margin: 30px 0 40px; color: #555555">Order</h2>
        <div class="row">
            <div class="card mb-3" style="max-width: 1000px; margin: auto">
                <div class="row no-gutters">
                  <div class="col-md-7">
                    <img src="{{asset('img/sepatu.jpg')}}" class="card-img" alt="...">
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                    <h5 class="card-title">{{$order->name}}</h5>
                      <p class="card-text">{{$order->description}}</p>
                      <p class="card-text">Stock: {{$order->stock}}</p>
                      <h3 class="card-text">${{$order->price}}.00</h3>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card mb-3" style="max-width: 1000px; margin: auto">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <h2 class="title" style="text-align:center; font-size: 23px; margin: 13px 0 5px; color: #555555">Buyer Information</h2>
                        <div class="card-body" style="width: 1000px;margin: auto">
                            <div class="box" style="width: 958px">
                                
                                <form action="/order/buy" method="post">
                                  {{ csrf_field() }}
                                  <input name="product_id" type="hidden" value="{{$order->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Name</label>
                                      <input name="buyer_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Contact</label>
                                      <input name="buyer_contact" type="tel" class="form-control" id="exampleInputPassword1" placeholder="Contact">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Quantity</label>
                                      <input name="quantity" type="number" class="form-control" id="exampleCheck1" placeholder="Quantity" style="width: 300px">
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </form>
                            </div>
                        </div>
                      </div>
                </div>
              </div>

        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>