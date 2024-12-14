@extends('baseLayout.navbarPetani')
@section("konten")

<div class="dataProduk">
    <h5>Data Produk Tani</h5>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

        <button class="btn btn-primary" type="button" style="background-color: #055C46; border-radius:10px">Tambah Produk +</button>
      </div>
    <table class="table" style="margin-top:20px">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><img src="img/kentang2.jpg" alt="" style="width: 200px; height:150px;""></td>
            <td>Kentang</td>
            <td>Rp.5000/Kg</td>
            <td> <button class="btn btn-primary" type="button" style="background-color: #055C46; border-radius:20px">:</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td><img src="img/cabe2.jpg" alt="" style="width: 200px; height:150px;"></td>
            <td>Cabai</td>
            <td>Rp.5000/Kg</td>
            <td> <button class="btn btn-primary" type="button" style="background-color: #055C46; border-radius:20px">:</button></td>
          </tr>

        </tbody>
      </table>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-md-end">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous" style="color: #055C46">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" style="color: #055C46" href="#">1</a></li>
          <li class="page-item"><a class="page-link" style="color: #055C46" href="#">2</a></li>
          <li class="page-item"><a class="page-link" style="color: #055C46"href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next" style="color: #055C46">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
</div>


@endsection
