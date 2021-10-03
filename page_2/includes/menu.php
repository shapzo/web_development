<?php
echo'
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <a class="navbar-brand text-uppercase text-expanded" href="patron.php">Inicio</a>
          <li class="nav-item nav-item px-lg-4">
            <a
              class="nav-link text-uppercase text-expanded"
              href="patronfrm.php"
              >Tabluuky</a
            >
          </li>
          <li class="nav-item nav-item px-lg-4">
            <a
              class="nav-link text-uppercase text-expanded"
              href="nuevoMenufrm.php"
              >Menu</a
            >
          </li>

        </ul>
      </div>
      <form class="form-inline">
    <input class="form-control mr-sm-2" type="Buscar" placeholder="aki escribe papi" aria-label="Buscar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
    </nav>
';

