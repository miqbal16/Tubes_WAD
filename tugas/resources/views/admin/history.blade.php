<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>History</title>
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
            <button type="button" onclick="location.href='{{route('myAdmin')}}'" class="btn btn-primary">Customer Page</button>          </li>
          <li class="nav-item active" style="margin-left: 60px">
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
      
      @if ($order->count() > 0)
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h2 class="title" style="text-align:center; font-size: 26px; margin: 30px 0 40px; color: #555555">History</h2>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Name Car</th>
                <th scope="col">No Polisi</th>
                <th scope="col">Tahun</th>
                <th scope="col">Status Car</th>
                <th scope="col">Mulai Rent</th>
                <th scope="col">Akhir Rent</th>
                <th scope="col">Pembayaran</th>
                <th scope="col">Total</th>
                <th scope="col">Status Pembayaran</th>
                
              </tr>
            </thead>
            <?php $number = 1; ?>
            <tbody>
              @foreach ($order as $or)
              <tr>
                <th scope="row">{{$number}}</th>
                <td>{{$or->name}}</td>
                <td>{{$or->email}}</td>
                <td>{{$or->no_hp}}</td>
                <td>{{$or->name_car}}</td>
                <td>{{$or->no_polisi}}</td>
                <td>{{$or->tahun_kendaraan}}</td>
                <td>{{$or->status_car}}</td>
                <td>{{$or->mulai}}</td>
                <td>{{$or->kembali}}</td>
                <td>{{$or->pembayaran}}</td>
                <td>{{$or->total}}</td>
                <td>{{$or->status_pembayaran}}</td>
              </tr>
              <?php $number += 1; ?>    
              @endforeach
              
            </tbody>
          </table>
        </div>
      @else
      <div class="col-sm">
        <p style="text-align:center; margin:40px 0 0">There is no data...</p>
        <button type="submit" onclick="location.href='/order'" value="/product/InsertProduct" class="btn btn-dark" style="margin:20px auto 0; display:block;">Order Now</button>
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