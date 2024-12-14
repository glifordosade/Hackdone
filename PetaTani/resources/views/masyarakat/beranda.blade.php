@extends('baseLayout.NavbarMasyarakat')

@section('konten')
    <div class="container-fluid" style="display:flex;align-items:center;justify-content:center">
        <div
            style="width: 80%;height:300px;background-color:#1AA928;border-radius:8px;display:flex;overflow:hidden;justify-content:space-evenly;margin-top:30px">
            <div
                style="width:40%;display:flex;flex-direction:column;align-items:start;justify-content:center;padding-left:30px">
                <div style="align-items:start;justify-content:space-arround;height:60%;color:white">
                    <p style="font-size: 28px;font-weight:600">SELAMAT DATANG di <br>PETATANI </p>
                    <p style="font-weight:100px ">Temukan berbagai produk pertanian disini</p>
                </div>
                <button type="button " class="btn"
                    style="background-color:#EB763C;  padding: 8px 10px; width: 120px;font-size: 12px;border-radius:100px;font-weight:600;color:white; margin-top:20px">VIEW
                    NOW</button>
            </div>
            <div style="width:50%;">
                <img src="img/AgroTech.png" style="height:430px; margin-top:-20px" alt="">
            </div>
        </div>
    </div>


    <div class="produk">
        <div class="container text-left"  >
            <div class="row d-flex justify-content-center" style="margin-top: 40px; margin-bottom:20px">
                <!-- Kartu 1 -->
                <div class="card m-2" style="width: 12rem;">
                    <img src="img/jagung.png" class="card-img-top" alt="Jagung">
                    <div class="card-body">
                        <p class="card-text text-center">Jagung</p>
                    </div>
                </div>
                <!-- Kartu 2 -->
                <div class="card m-2" style="width: 12rem;">
                    <img src="img/kubis.jpg" class="card-img-top" alt="Kubis">
                    <div class="card-body">
                        <p class="card-text text-center">Kubis</p>
                    </div>
                </div>
                <!-- Kartu 3 -->
                <div class="card m-2" style="width: 12rem;">
                    <img src="img/kentang.jpg" class="card-img-top" alt="Kentang">
                    <div class="card-body">
                        <p class="card-text text-center">Kentang</p>
                    </div>
                </div>
                <div class="card m-2" style="width: 12rem;">
                    <img src="img/cabai.jpg" class="card-img-top" alt="Kentang">
                    <div class="card-body">
                        <p class="card-text text-center">Cabai</p>
                    </div>
                </div>
                <div class="card m-2" style="width: 12rem;">
                    <img src="img/produk1.png" class="card-img-top" alt="Kentang">
                    <div class="card-body">
                        <p class="card-text text-center">Cabai Merah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
