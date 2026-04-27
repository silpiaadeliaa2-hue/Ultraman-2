<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tokoonline</title>
</head>

<body>
    <h3> {{$judul}} </h3>

    @if(session()->has('error'))
    <div style="color: red;">
        <strong>{{ session('error') }}</strong>
    </div>
    @endif

    <form action="{{ route('backend.login') }}" method="post">
        @csrf
        <label>Email</label><br>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
        @error('email')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <p></p>

        <label>Password</label><br>
        <input type="password" name="password" placeholder="Masukkan Password">
        @error('password')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <p></p>

        <button type="submit">Login</button>
    </form>
</body>

</html>