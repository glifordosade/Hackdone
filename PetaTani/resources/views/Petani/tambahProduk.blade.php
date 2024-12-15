@extends('baseLayout.navbarPetani')
@section("konten")


<div class="tambahProduk">
    <h3 style="margin-left: 380px">Tambah Produk Baru</h3>

    <div class="container text-left" style=" width:600px; margin-top:30px ">
        <div class="row align-items-start">
          <div class="col">

            <form>
                <div class="input-group">

                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                  </div>
                <div class="mb-3" style="margin-top: 10PX">
                  <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga Produk</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Produk</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <a href="/jualtani" class="btn btn-primary" type="button" style="background-color: #055C46; border-radius:10px">Submit</a>
              
              </form>
          </div>

        </div>
      </div>

      





</div>


@endsection
