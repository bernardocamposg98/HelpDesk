
<nav class=" header navbar navbar-expand-lg navbar-light bg-nav sticky-top ">
    <a class="navbar-brand" href="#">Help Desk</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav  ml-auto">
            <a class="textnav nav-item nav-link" href="../index.php#" data-toggle="tooltip" data-placement="bottom" title="Inicio">Inicio <i class="fas fa-home"></i></a>
            <li class="nav-item dropdown">
                <a class="textnav nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-toggle="tooltip" data-placement="bottom" title="Accciones">
                    Acciones <i class="fas fa-users"></i>
                </a>
                <div class="dropdown-menu">
                    <a class="textnav dropdown-item" href="../tecnicoTicketAbierto.php" data-toggle="tooltip" data-placement="bottom" title="Nuestro Equipo">Tickets Abiertos</a>
                    <a class="textnav dropdown-item" href="../tecnicoTicketCerrado.php" data-toggle="tooltip" data-placement="bottom" title="Nuestro Equipo">Tickets Cerrados</a>
                </div>
            </li>
        </div>


        <div class="navbar-nav ml-auto ">
            <a data-toggle="tooltip" data-placement="bottom" title="Usuario">
                <a  class="textnav nav-item nav-link " data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesión" href="../metodos/cerrarSesion.php">
                <?php echo $_SESSION['u_usuario']?>
                
                <i  class="fas fa-sign-out-alt">
                </i>
                </a>   
            </a>
        </div>
    </div>
</nav>
