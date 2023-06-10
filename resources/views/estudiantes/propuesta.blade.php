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
            @if(request()->routeIs('estudiantes.*'))
            <span class="navbar-text text-white">Estudiantes </span>
            @endif
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="text-center">
                            <h1 class="mt-4 mb-5">Estudiantes Propuesta</h1>
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
                                            </div>
                                        <div class="container">
                                            <form action="{{ route('estudiantes.guardarForm') }}" method="POST">
                                                @csrf
                                                <div class="mt-3">
                                                    <label for="rut" class="form-label">RUT</label>
                                                    <input type="text" class="form-control" id="rut" name="rut" value="{{ $estudiantes->rut }}" readonly>
                                                </div>
                                                <div class="mt-3">
                                                    <label for="texto" class="form-label">Documento</label>
                                                    <input type="text" class="form-control" id="documento" name="documento">
                                                </div>
                                                <input type="submit" class="btn btn-primary mt-3" value="Guardar">
                                            </form>
                                        </div>
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