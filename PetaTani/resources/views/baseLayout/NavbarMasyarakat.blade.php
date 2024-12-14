<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetaTani | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Biyclette&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Document</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        .navbar-container {
            margin: 0;
            padding: 0;
        }

        .navbar {
            margin: 0;
            padding: 0;
        }
        
        .input-group {

            border: 2px solid #AFB1BD;
            /* Unified border for the entire group */
            border-radius: 5px;
            /* Rounded corners for the group */
            overflow: hidden;
            /* Ensures content stays within the border */
        }

        .input-group-text {
            background-color: #ffffff;
            /* Same as input field for seamless integration */
            border: none;
            /* Remove individual border */
        }

        .input-group:focus-within {
            border: 2px solid #055C46;
            /* border-color: #0056b3; */
            /* Change border color when focused */
            box-shadow: 0 0 5px rgba(5, 92, 70, 0.5);
            /* Optional focus glow effect */
        }

        input.form-control:focus {
            box-shadow: none;
            /* Remove the default input box shadow */
            outline: none;
            /* Remove the default focus outline */
        }
    </style>
</head>

<body>
    <div class="shadow-sm navbar-container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class=" container" style="padding-left:50px;padding-right:50px">
                <a class="navbar-brand" href="#">
                    <img src="img/hlogo.png" alt="Logo" style="width:100px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="text-center collapse navbar-collapse" id="navbarText"
                    style="justify-content: space-between">
                    {{-- Button Wishlist Keranjang dan Notifikasi --}}

                    <div class="mx-auto" style="display:flex; flex-direction:row;">
                        <div class="input-group" style="width: 500px">
                            <!-- Search Icon -->
                            <span class="bg-white border-0 input-group-text">
                                <img src="img/search.png" style="height:18px;" alt="Search Icon">
                            </span>
                            <!-- Search Input -->
                            <input type="search" class="border-0 form-control" placeholder="Pencarian"
                                aria-label="Search" />
                        </div>
                    </div>
                    <!-- Button Registrasi dan Masuk tetap di kanan -->
                    <span class="navbar-text"
                        style="display: flex; justify-content:space-between;align-items:center;gap:10px">
                        <span class="border-0" style="gap: 12px;display:flex;align-items:center;justify-content:center">
                            <img src="img/Notifikasi.png" style="height:20px;" alt="Search Icon">
                            <img src="img/Love.png" style="height:18px;" alt="Search Icon">
                            <img src="img/Cart.png" style="height:20px;" alt="Search Icon">
                        </span>
                        <div style="background-color:#2f2f2f;height:24px;width:2px;border-radius:10px">
                        </div>
                        {{-- User  --}}
                        <div style="display: flex;justify-content:center;align-items:center;gap:1rem">
                            {{-- Photo Profile --}}
                            <img src="img/Mask Group.png" style="width:48px" alt="">
                            <div style="display: flex;flex-direction:column;align-items:start;">
                                <div style="font-size:20px;font-weight:500;color:#2f2f2f"> Hi, Samsul</div>
                                <div style="font-size:10px;font-weight:400;color:#100DB1"> Masyarakat</div>
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
