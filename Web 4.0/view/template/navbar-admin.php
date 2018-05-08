<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">MetroFood</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../controller/controlador.php?ver=plato">Platos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Restaurante</a>
          </li>
          <li class="nav-item active">
            <div class="dropdown">
                  
              <a class="nav-link dropdown-toggle active" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">CRUD</a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Clientes</a>
                <a class="dropdown-item" href="#">Restaurantes</a>
                <a class="dropdown-item" href="#">Platos</a>
              </div>
            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#">Pedidos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Reporte</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../view/addplato.php">Añadir plato</a>
          </li>
        </ul>
        <span class="navbar-text bt">
          <a href="../controller/controlador.php?cerrar=true" class="btn btn-dark text-white bt">Cerrar Sesión</a>
        </span>
      </div>
    </nav>
</header>
