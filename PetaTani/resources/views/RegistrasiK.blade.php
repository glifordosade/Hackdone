@extends("baseLayout.nonav")
@section('konten')
<div class="container-fluid text-left" style="margin: 0; padding: 0; margin-left;50px">
  <div class="row" style="margin: 0; padding: 0;">
      <!-- Kolom Kiri -->
      <div class="col-8 p-4" >
          <div>
              <img src="img/hlogo.png" alt="Logo" class="m-3" style="width: 250px" />
          </div>
          <h1 class="text-bold" style="margin-left:30px">Registrasi Konsumen</h1>
          <form action="/RegistProcess" method="POST">
            @csrf
              <div class="mb-2" style="margin-left:30px">
                  <label for="exampleInputEmail1" class="form-label">E-mail</label>
                  <input placeholder="Masukkan E-mail" name="email" value="{{ old('email') }}" type="email" class="form-control" id="exampleInputEmail1" style="width: 500px" aria-describedby="emailHelp">
                  @error('email')
                  <small class="text-danger">{{ $message }}</small><br>
                  @enderror
              </div>
              <div style="height: 20px;"></div>
              <div class="mb-2" style="margin-left:30px">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}" type="text" class="form-control" id="exampleInputEmail1" style="width: 500px" aria-describedby="emailHelp">
                  @error('nama')
                  <small class="text-danger">{{ $message }}</small><br>
                  @enderror
              </div>
              <div style="height: 20px;"></div>
              <div class="mb-2" style="margin-left:30px">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input placeholder="Masukkan Password" name="password" type="password" class="form-control" id="exampleInputPassword1" style="width: 500px">
                  <input placeholder="Masukkan Password" name="role" type="text" value="3" hidden>
                  @error('password')
                  <small class="text-danger">{{ $message }}</small><br>
                  @enderror
                  @error('role')
                  <small class="text-danger">{{ $message }}</small><br>
                  @enderror
              </div>
              <div style="height: 20px;"></div>
              <button type="submit" class="btn btn-success mb-3" style="font-size: 15px; background-color: #055C46; color: #ffffff; width: 500px; margin-left:30px">Submit</button>
          </form>
      </div>
      <!-- Kolom Kanan -->
      <div class="col-4" style="background-color: #055C46; position: relative; height: 750px;">
          <img src="img/nagari-pariangan-2 1.png" alt="Gambar Nagari" class="img-fluid"
              style="width: 800px; height: 600px; position: absolute;  margin-top:50px; left: -100px;" />
      </div>
  </div>
</div>
@endsection