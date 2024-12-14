@extends("baseLayout.nonav")
@section('konten')
    <div>
        <img src="img/hlogo.png" alt="" class="m-3" style="width: 250px"/>
    </div>

    <div class="kontainer w-25 mx-5 my-5">
        <h1 class="text-bold">Login</h1>

        <form action="/LoginProcess" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">E-mail</label>
              <input placeholder="Masukkan Email" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                    <small class="text-red">{{ $message }}</small><br>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input placeholder="Masukkan Password" name="password" type="password" class="form-control" id="exampleInputPassword1">
              @error('password')
                    <small class="text-red">{{ $message }}</small><br>
                @enderror
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection


