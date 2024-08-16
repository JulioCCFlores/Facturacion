<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crear cuenta</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/estilologin.css') }}">
</head>
<body style="background-color: #F4F4F4;">
    <div class="login-container">
        
        <img src="{{ asset('images/logo LOGING.png') }}" alt="Mini Logo" style="width: 50px; height: 50px;">
       
        <h2>Crea tu cuenta</h2>

        <form action="{{ route('register') }}" method="post">
            @csrf

            <p>Nombre</p>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <p>Email</p>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <p>Contraseña</p>
            <input type="password" name="password" required>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <p>Confirmar contraseña</p>
            <input type="password" name="password_confirmation" required>
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Crear cuenta</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
