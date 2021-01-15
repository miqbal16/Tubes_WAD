<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>List Car</title>
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


      {{-- content --}}
      
      @if ($car->count() > 0)
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h2 class="title" style="text-align:center; font-size: 26px; margin: 30px 0 40px; color: #555555">List Car</h2>
            <button type="submit" onclick="location.href='/car_list/InsertProduct'" value="/car_list/InsertProduct" style="margin-bottom: 20px;" class="btn btn-dark">Add Car</button>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Isi Penumpang</th>
                <th scope="col">Pintu</th>
                <th scope="col">No Polisi</th>
                <th scope="col">Tahun</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <?php $number = 1; ?>
            <tbody>
              @foreach ($car as $pro)
              <tr>
                <th scope="row">{{$number}}</th>
                <td>{{$pro->name}}</td>
                <td>Rp.{{$pro->price}}</td>
                <td>{{$pro->isi_penumpang}}</td>
                <td>{{$pro->pintu}}</td>
                <td>{{$pro->no_polisi}}</td>
                <td>{{$pro->tahun}}</td>
                <td>{{$pro->status}}</td>
                <td>
                  <div class="box" style="display: flex; justify-align: center;">
                    <a href="{{url("car_list/{$pro->id}/UpdateProduct")}}" class="btn btn-primary" style="margin-right: 10px">Edit</a>
                    <form action="{{route('carList.delete')}}" method="post">
                      @csrf
                      <input type="hidden" value="{{$pro->id}}" name="id" class="btn btn-primary">
                      <button class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
              <?php $number += 1; ?>    
              @endforeach
              
            </tbody>
          </table>
        </div>
      @else
      <div class="col-sm">
        <p style="text-align:center; margin:40px 0 0">There is no data...</p>
        <button type="submit" onclick="location.href='/car_list/InsertProduct'" value="/car_list/InsertProduct" class="btn btn-dark" style="margin:20px auto 0; display:block;">Add Car</button>
      </div>
      @endif
      
          
      
          

        </div>
      </div>    
      
      
      
      {{-- table --}}
    
      



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