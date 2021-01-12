<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Update</title>
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
            <a class="nav-link" href="/admin" style="color: #555555">HOME <span class="sr-only"></span></a>
          </li>
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
      
      <div class="container">
        <h2 class="title" style="text-align:center; font-size: 23px; margin: 30px 0 40px; color: #555555">Update Product</h2>
        <div class="row">
          <div class="col-sm-10" style="margin:auto">
            <form action="{{url("/car_list/{$car->id}")}}" method="post">
              @method('PATCH')
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="disabledTextInput">Product Name</label>
                  <input value="{{$car->name}}" type="text" id="disabledTextInput" class="form-control" name="name_product">
                </div>

                <div class="form-group">
                  <label for="disabledTextInput">No Polisi</label>
                  <input value="{{$car->no_polisi}}" type="text" id="disabledTextInput" class="form-control" name="no_polisi">
                </div>


                <div class="mb-3">
                  <label for="disabledTextInput">Price</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="validatedInputGroupPrepend">Rp</span>
                    </div>
                    <input value="{{$car->price}}" type="number" class="form-control" name="price" aria-describedby="validatedInputGroupPrepend" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="disabledTextInput">Status</label>
                  <select name="status" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option value="Tanpa Driver">Tanpa Driver</option>
                    <option value="Pakai Driver">Pakai Driver</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$car->description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Isi Penumpang</label>
                  <input value="{{$car->isi_penumpang}}" type="number" name="isi_penumpang" class="form-control" id="exampleFormControlInput1" style="width: 300px">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Pintu</label>
                  <input value="{{$car->pintu}}" type="number" name="pintu" class="form-control" id="exampleFormControlInput1" style="width: 300px">
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlInput1">Tahun</label>
                  <input value="{{$car->tahun}}" type="number" name="tahun" class="form-control" id="exampleFormControlInput1" style="width: 300px">
                </div>

                <div class="form-group">
                  <label style="display: block" for="exampleFormControlInput1">Image</label>
                  <input type="file" name="file_img">
                </div>
                <button type="submit" name="submit" class="btn btn-dark">Submit</button>
            </form>
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