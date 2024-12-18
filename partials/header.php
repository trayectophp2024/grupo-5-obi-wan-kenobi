<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Star Wars</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="imagenes/starwars_logo2.webp" type="image/x-icon">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="css/estilos.css">
  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <header>
    <nav class="navbar d-flex justify-content-evenly">
      <a href="index.php" class="navbar-brand">INICIO</a>
      <a href="peliculas.php?categoria=peliculas" class="navbar-brand">PELICULAS</a>
      <a href="personajes.php?categoria=personajes" class="navbar-brand">PERSONAJES</a>
      <a href="naves.php?categoria=naves" class="navbar-brand">NAVES</a>
      <a href="sables.php?categoria=sables" class="navbar-brand">SABLES</a>

      <div class="container-fluid d-flex justify-content-center">
        <form action="busqueda.php" method="GET" class="d-flex" role="search">
          <div class="input-group">
            <input class="form-control" name="q" type="search" aria-label="Search" maxlength="50" >
            <button type="submit" class="input-group-text">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </form>
      </div>
    </nav>
    <hr>
  </header>