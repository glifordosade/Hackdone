<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetaTani | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/hlogo.png" alt="Logo" style="width:100px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="text-center collapse navbar-collapse" id="navbarText">
                    {{-- Button Wishlist Keranjang dan Notifikasi --}}

                    <div class="mx-auto" style="display:flex; flex-direction:row; gap:20px">
                        <div class="rounded input-group" style="width: 500px">
                            <div class="input-group">
                                <!-- Search Icon -->
                                <span class="bg-white border-0 input-group-text" style="margin-right: -10px">
                                    <img src="img/search.png" style="height:18px;" alt="Search Icon">
                                </span>
                                <!-- Search Input -->
                                <input type="search" class="border-0 rounded form-control" placeholder="Pencarian" />
                            </div>

                        </div>
                        <span class="border-0 input-group-text" style="gap: 12px">
                            <img src="img/Notifikasi.png" style="height:18px;" alt="Search Icon">
                            <img src="img/Love.png" style="height:18px;" alt="Search Icon">
                            <img src="img/Cart.png" style="height:20px;" alt="Search Icon">
                        </span>
                    </div>
                    <!-- Button Registrasi dan Masuk tetap di kanan -->
                    <span class="navbar-text" style="display: flex; justify-content:space-between;align-items:center;gap:10px">
                        <div style="background-color:#2f2f2f;height:24px;width:1.5px">
                        </div>
                        {{-- User  --}}
                        <div style="display: flex;justify-content:center;align-items:center">
                            {{-- Photo Profile --}}
                            <img src="img/Mask Group.png" style="width:48px" alt="">
                            <div style="display: flex;flex-direction:column">
                                <div> Hi, Samsul</div>
                                <div> Masyarakat</div>
                            </div>

                        </div>

                    </span>
                </div>
            </div>
        </nav>
    </div>

    @yield('konten')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
