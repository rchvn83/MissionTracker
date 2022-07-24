<!DOCTYPE html>
<html>
  <head>
    <title>Mission tracker</title>
    <meta charset="utf-utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <body>

     <!-- Navbar - Mission Tracker -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mission Tracker</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Entreprises</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Entreprise1</a></li>
              <li><a class="dropdown-item" href="#">Entreprise2</a></li>
              <li><a class="dropdown-item" href="#">Entreprise3</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Missions</a>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Rechercher" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

   <!-- List - Entreprise -->

  <div class="list-group w-auto">
  <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src="images/entreprise_mini_icon.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Entreprise1</h6>
        <p class="mb-0 opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <small class="opacity-50 text-nowrap"></small>
    </div>
  </a>
  <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src="images/entreprise_mini_icon.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">Entreprise2</h6>
        <p class="mb-0 opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <small class="opacity-50 text-nowrap"></small>
    </div>
  </a>
  <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src="images/entreprise_mini_icon.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0 text-nowrap">Entreprise3</h6>
        <p class="mb-0 opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <small class="opacity-50 text-nowrap"></small>
    </div>
  </a>
</div>
