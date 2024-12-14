@extends('baseLayout.navbarPetani')
@section("konten")

<div class="resource">
    <h2>Prediksi Sumber Daya</h2>

    <select class="form-select form-select-lg mb-2" aria-label="Large select example" style="margin-top: 30px; width:400px; height:40px; margin-left:10px; font-size:15px; border: 1px solid green;">
        <option selected style="font-size:15px">Pilih Bahan Tani</option>
        <option value="1" style="font-size:15px">Padi</option>
        <option value="2" style="font-size:15px">Cabai</option>
        <option value="3" style="font-size:15px">Kubis</option>
      </select>


    <div class="container text-left">
        <div class="row align-items-start">
          <div class="col">
            <div class="mb-3" style="margin-top: 0px; width:400px;">
                <label for="exampleFormControlInput1" class="form-label">Luas Lahan</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Luas Lahan Anda"  style="border: 1px solid green;">
              </div>
          </div>


        </div>
        <button type="submit" class="btn btn-success text-bold" style="font-size: 15px; background-color: #f3f3f3; color: #055C46; width: 100px; margin-left:0px; margin-top:60px; border-color:#055C46; font-weight:bold;">Simpan</button>
      </div>











</div>







@endsection
