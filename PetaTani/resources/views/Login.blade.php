<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="/Login" method="POST" class="px-12 py-5 m-auto">
        @csrf
        <div>
            @if (session()->has('loginError'))
                <small class="text-red">{{ session('loginError') }}</small><br>
            @endif
            @error('username')
                <small class="text-red">{{ $message }}</small><br>
            @enderror
            @error('password')
                <small class="text-red">{{ $message }}</small><br>
            @enderror

            <label for="USERNAME" class="font-bold">NIP</label><br>
            <input name="username" type="text"
                class="p-3 w-full bg-slate-200 rounded-lg shadow-xl focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-500 @error('username')invalid:border-red-500 @enderror"
                placeholder="Masukkan NIP" required value="{{ old('username') }}">
        </div><br>
        <div>
            <label for="USERNAME" class="font-bold">PASSWORD</label><br>
            <input name="password" type="password"
                class="p-3 w-full bg-slate-200 rounded-lg shadow-xl focus:outline-none focus:border-sky-500 focus:ring-2 focus:ring-sky-500 @error('password')invalid:border-red-500 @enderror"
                placeholder="Password" required><br><br>
        </div>
        <div class="text-center">
            <input type="submit" class="inline-block px-12 py-2 font-bold text-white rounded-lg transisiwarna">
        </div>
    </form>
</body>

</html>
