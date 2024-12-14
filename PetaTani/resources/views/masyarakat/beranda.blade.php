@extends('baseLayout.NavbarMasyarakat')

@section('konten')
    <div class="container-fluid" style="display:flex;align-items:center;justify-content:center">
        <div
            style="width: 50%;height:300px;background-color:#1AA928;border-radius:8px;display:flex;overflow:hidden;justify-content:space-evenly;margin-top:30px">
            <div
                style="width:40%;display:flex;flex-direction:column;align-items:start;justify-content:center;padding-left:30px">
                <div style="align-items:start;justify-content:space-arround;height:60%;color:white">
                    <p style="font-size: 28px;font-weight:600">SELAMAT DATANG di <br>PETATANI </p>
                    <p style="font-weight:100px ">Temukan berbagai produk pertanian disini</p>
                </div>
                <button type="button " class="btn"
                    style="background-color:#EB763C;  padding: 8px 10px; width: 120px;font-size: 12px;border-radius:100px;font-weight:600;color:white">VIEW
                    NOW</button>
            </div>
            <div style="width:50%;">
                <img src="img/AgroTech.png" style="height:430px;margin-top:-20px" alt="">
            </div>
        </div>
    </div>
@endsection
