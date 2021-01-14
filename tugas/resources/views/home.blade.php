@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 style="color: #333333">Pembayaran</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form action="/pembayaran/proses" method="POST">
                      {{ csrf_field() }}
                      <input type="text" name="name" id="name" value="{{$name}}" hidden>
                      <input type="text" name="email" id="email" value="{{$email}}" hidden>
                      <input type="number" name="id_car" id="id_car" value="{{$id_car}}" hidden>
                      <textarea name="keterangan" id="message" rows="3" placeholder="Komen" hidden>{{$keterangan}}</textarea>
                      <input type="date" name="mulai" id="mulai" value="{{$mulai}}" hidden>
                      <input type="date" name="kembali" id="kembali" value="{{$kembali}}" hidden>
                      <input type="number" name="no_hp" id="no_hp" value="{{$no_hp}}" hidden>
                      <input type="text" name="name_car" id="name_car" value="{{$name_car}}" hidden>
                      <input type="text" name="status_car" id="status_car" value="{{$status_car}}" hidden>
                      <input type="text" name="no_polisi" id="no_polisi" value="{{$no_polisi}}" hidden>
                      <input type="number" name="harga" id="harga" value="{{$harga}}" hidden>
                      <input type="number" name="tahun_kendaraan" id="tahun_kendaraan" value="{{$tahun_kendaraan}}" hidden>
                        <fieldset class="form-group">
                          <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Non Tunai</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="pembayaran" id="gridRadios1" value="BRI (Transfer)" checked>
                                <label class="form-check-label" for="gridRadios1" style="margin: 0 0 20px">
                                    <img height="48" src="http://1.bp.blogspot.com/-6YE8x_ZkcT0/TV2uUwl1YiI/AAAAAAAABHw/0Xyj00OHeWA/s1600/logo-bri.png" width="100" />
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="pembayaran" id="gridRadios2" value="BCA (Transfer)">
                                <label class="form-check-label" for="gridRadios2" style="margin: 0 0 20px">
                                    <img height="48" src="http://2.bp.blogspot.com/-_mCEuNk_z48/TV2uQZrISmI/AAAAAAAABHo/0AdOcn9_b_M/s1600/logo-bca.png" width="100" />
                                </label>
                              </div>
                              <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="pembayaran" id="gridRadios3" value="Mandiri (Transfer)" >
                                <label class="form-check-label" for="gridRadios3">
                                    <img height="48" src="http://4.bp.blogspot.com/-B1Jjsl-3Aes/TV2uXNEVpOI/AAAAAAAABH0/2_dJQ3-v3Bo/s1600/logo-mandiri.png" width="100" />
                                </label>
                              </div>
                            </div>
                          </div>
                        </fieldset>

                        <hr>


                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Tunai</legend>
                            
                                <div class="form-check disabled">
                                  <input class="form-check-input" type="radio" name="pembayaran" id="gridRadios3" value="Bayar Tunai" >
                                  <label class="form-check-label" for="gridRadios3">
                                    Bayar di Tempat
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
  


                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" style="margin-left: 25px">Submit</button>
                          </div>
                        </div>
                      </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
