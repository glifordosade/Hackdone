<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/tab.png">
    <title>PetaTani | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-container" style="margin-top:0px;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-top:0px">
            <div class="container-fluid" style="background-color:#055C46;  margin:0px;">
                <a class="navbar-brand" href="#">
                    <img src="img/logoPutih.png" alt="Logo" style="width:100px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="text-center collapse navbar-collapse" id="navbarText">
                    <div class="mx-auto" style="display:flex; flex-direction:row; gap:20px">
                        <div class="rounded input-group" style="width: 500px">
                            <div class="input-group">
                                <span class="bg-white border-0 input-group-text" style="margin-right: -10px">
                                    <img src="img/search.png" style="height:18px;" alt="Search Icon">
                                </span>
                                <input type="search" class="border-0 rounded form-control" placeholder="Pencarian" />
                            </div>
                        </div>
                        <span class="border-0 input-group-text" style="gap: 12px">
                            <img src="img/Notifikasi.png" style="height:18px;" alt="Notification Icon">

                        </span>
                    </div>
                    <span class="navbar-text" style="display: flex; justify-content:space-between;align-items:center;gap:10px">
                        <div style="background-color:#2f2f2f;height:24px;width:1.5px"></div>
                        <div style="display: flex;justify-content:center;align-items:left">
                            <img src="img/Mask Group.png" style="width:48px" alt="User Profile">
                            <div style="display: flex;flex-direction:column; color:#ffff">
                                <div>Hi, Leo</div>
                                <div>Petani</div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <!-- Layout dengan Sidebar dan Konten -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 bg-light vh-100" style="padding: 20px;">

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/BerandaPetani" style="color: #64748B">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/resource" style="color: #64748B">Sumber Daya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jualtani" style="color: #64748B">Jual Tani</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Produksi" style="color: #64748B">Produksi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link" href="#" style="color: #64748B">Keluar</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 col-lg-10" style="padding: 20px;">
                @yield('konten')
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
