<!DOCTYPE html>
<html lang="en">
@extends('layouts.administradorMaster')
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="nav-fixed">
        <nav class="topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('volver')}}">Sistema TSI</a>
            @if(request()->routeIs('administrador.*'))
            <span class="navbar-text text-white caja">Administrador</span>
            @endif
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="crearDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Crear
                    </a>
                    <ul class="dropdown-menu bg-primary dropdown-menu-dark" >
                        <li><a class="dropdown-item" href="#">Estudiantes</a></li>
                        <li><a class="dropdown-item" href="#">Profesores</a></li>
                        <li><a class="dropdown-item" href="#">Postulaciones</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="text-center">
                            <h1 class="mt-4 mb-5">Administrador</h1>
                        </div>
                    <div class="row justify-content-center align-items-center mt-5">
                           <div class="col-md-8">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body mb-3">
                                        <nav class="navbar navbar-expand-lg navbar-dark">
                                            <div class="container-fluid">
                                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class = 'container'>
                                                <div class="collapse navbar-collapse" id="navbarNav">
                                                    <ul class="navbar-nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link {{ isset($pestaña) && $pestaña === 'estudiantes' ? 'active' : '' }}" href="{{route('estudiantes.index',['active' => isset($pestaña) && $pestaña === 'estudiantes'])}}">Estudiantes</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link {{ isset($pestaña) && $pestaña === 'profesores' ? 'active' : '' }}" href="{{route('profesores.index',['active' => isset($pestaña) && $pestaña === 'profesores'])}}">Profesores</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{route('administrador.propuestas')}}">Propuestas</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="navbar-nav ml-auto">
                                                <ul class="navbar-nav ml-auto">
                                                    <li class="nav-item">
                                                        @if(request()->routeIs('estudiantes.index'))
                                                        <a class="nav-link" href="{{ route('estudiantes.crear') }}">Crear</a>
                                                        @elseif(request()->routeIs('profesores.index'))
                                                        <a class="nav-link" href="{{ route('profesores.crear') }}">Crear</a>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </ul>
                                        </nav>
                                        @if(request()->routeIs('profesores.index'))
                                        <div class="container">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($profesores as $profesor)
                                                <tr>
                                                    <td>{{ $profesor->id }}</td>
                                                    <td>{{ $profesor->nombre }}</td>
                                                    <td>{{ $profesor->apellido }}</td>
                                                    <td>{{ $profesor->email }}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                        @endif
                                        @if(request()->routeIs('estudiantes.index'))
                                        <div class="container">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>RUT</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                 @foreach ($estudiantes as $estudiante)
                                                <tr>
                                                    <td>{{ $estudiante->rut }}</td>
                                                    <td>{{ $estudiante->nombre }}</td>
                                                    <td>{{ $estudiante->apellido }}</td>
                                                    <td>{{ $estudiante->email }}</td>
                                                </tr>
                                                @endforeach
                                                
                                            </table>
                                        </div>
                                        @endif
                                        @if(request()->routeIs('administrador.propuestas'))
                                        <div class="container">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Fecha</th>
                                                        <th>Documento</th>
                                                        <th>EstudianteRut</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                @foreach ($propuestas as $propuesta)
                                                <tr>
                                                    <td>{{ $propuesta->id }}</td>
                                                    <td>{{ $propuesta->fecha }}</td>
                                                    <td>{{ $propuesta->documento }}</td>
                                                    <td>{{ $propuesta->estudiante_rut }}</td>
                                                    <td>
                                                        <form action="{{ route('administrador.actualizar', ['id' => $propuesta->id]) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $propuesta->id }}">
                                                            <select name="estado">
                                                                <option value="0" {{ $propuesta->estado == 0 ? 'selected' : '' }}>En espera</option>
                                                                <option value="1" {{ $propuesta->estado == 1 ? 'selected' : '' }}>Malos</option>
                                                                <option value="2" {{ $propuesta->estado == 2 ? 'selected' : '' }}>Bueno</option>
                                                            </select>
                                                            <button type="submit">Actualizar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>