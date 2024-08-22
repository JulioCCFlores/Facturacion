<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Configuración</title>
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluye jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


   

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar-custom {
            background-color: white;
            padding-left: 40px;
            padding-right: 40px;
        }
        .navbar-custom .navbar-brand img {
            width: 50px;
        }
        .navbar-custom .navbar-nav .nav-item .btn {
            background-color: #4CAF50;
            color: white;
            border-radius: 10px;
            margin-right: 30px;
            height: 30px;
            width: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .navbar-custom .navbar-nav .nav-item .btn:hover {
            opacity: 0.6; /* Ajusta la opacidad según sea necesario */
    transition: opacity 0.3s ease; /* Agrega una transición suave */
        }
        .navbar-custom .navbar-nav .nav-item img {
            width: 30px;
            margin-right: 35px;
        }
        .navbar-custom .navbar-nav .nav-item2 img {
            width: 20px;
        }
        .navbar-custom .navbar-nav .nav-item3 img {
            width: 3px;
        }
        .navbar-nav-center {
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }
        .divider {
            border-top: 2px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.2);
        }
       
        
        .main-panel {
            background-color: rgb(255, 255, 255);
            border: 1px solid #ddd;
            border-radius: 30px;
            padding: 20px;
            margin: 20px 30px;
        }
        .ui-autocomplete {
            max-height: 150px; /* Ajusta la altura máxima según sea necesario */
            overflow-y: auto; /* Agrega scroll vertical si hay muchas opciones */
            overflow-x: hidden; /* Evita el scroll horizontal */
        }
        .toggle-content {
            display: none;
            margin-top: 10px;
        }
        .toggle-button {
            cursor: pointer;
            color: rgb(0, 0, 0);
            text-decoration: none ;
        }
        .form-group select {
        max-height: 400px; /* Ajusta según sea necesario */
        overflow-y: auto; /* Agrega una barra de desplazamiento si es necesario */
    }
    </style>
</head>
<body style="background: #F4F4F4">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo menu.png') }}" alt="Logo" > </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto navbar-nav-center">
                <li class="nav-item dropdown">
                    <button class="btn btn-primary btn-sm " id="facturacionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('images/catalogos.png') }}" alt="catalogos">
                        Facturación
                    </button>
                    <div class="dropdown-menu" aria-labelledby="facturacionDropdown">
                        <a class="dropdown-item" href="{{ route('facturas.index') }}">Mis facturas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-primary btn-sm " id="catalogosDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('images/catalogos.png') }}" alt="catalogos">
                        Catálogos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="catalogosDropdown">
                        <a class="dropdown-item" href="{{ route('productos.index') }}">Productos</a>
                        <a class="dropdown-item" href="{{ route('clientes.index') }}">Clientes</a>
                         {{-- <a class="dropdown-item" href="{{ route('impuestos.index') }}">Impuestos</a>  --}}
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-primary btn-sm " id="configuracionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('images/catalogos.png') }}" alt="Configuración">
                        Configuración
                    </button>
                    <div class="dropdown-menu" aria-labelledby="configuracionDropdown">
                        <a class="dropdown-item" href="{{ route('empresaprincipal.index') }}">Datos</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item2" style="padding-right: 10px">
                    <div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{ asset('images/salir.png') }}" alt="Salir">
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item3" style="padding-right: 10px">
                    <img src="{{ asset('images/Linea2.png') }}" alt="Línea">
                </li>
                <li class="nav-item2">
                    <img src="{{ asset('images/User.png') }}" alt="Usuario">
                    {{ Auth::user()->email }}
                </li>
            </ul>
        </div>
    </nav>

    <div class="divider"></div>

   
   
        <div class="row">
          <div class="col-12">
            <div class="main-panel">
              <div>
                @yield('content')
              </div>
            </div>
          </div>
        </div>
     
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
