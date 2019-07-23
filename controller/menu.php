<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rounded">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tienda Infantil Kitin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../app/dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Ventas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Ventas:</h6>
                <a class="collapse-item" href="" data-toggle="modal" data-target="#venta">Nueva Venta</a>
                <a class="collapse-item" href="../app/consultarVentas.php">Consultar Ventas</a>
                <a class="collapse-item" href="../app/detallarVenta.php">Detallar Venta</a>
                <a class="collapse-item" href="#">Realizar Abono(No)</a>

            </div>
        </div>
    </li>
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-user"></i>
            <span>Clientes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Clientes:</h6>
                <a class="collapse-item" href=""data-toggle="modal" data-target="#cliente">Registrar Cliente</a>
                <a class="collapse-item"  href="../app/clientes.php">Consultar Cliente</a>
                <a class="collapse-item"  href="">Cartera x Cliente (No)</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-tags"></i>
            <span>Articulos</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Articulos:</h6>
                <a class="collapse-item" data-toggle="modal" data-target="#articulo" href="">Registrar Articulo</a>
                <a class="collapse-item" href="../app/inventario.php">Inventario</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Gastos</span>
        </a>
        <div id="collapse2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gastos:</h6>
                <a class="collapse-item" data-toggle="modal" data-target="#compra" href="">Registrar Compra</a>
                <a class="collapse-item" data-toggle="modal" data-target="#gasto" href="">Registrar Gasto</a>
                <a class="collapse-item"  href="../app/gastos.php">Listar Gastos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>Proveedores</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Proveedores:</h6>
                <a class="collapse-item"  href="" data-toggle="modal" data-target="#proveedor" >Registrar Proveedor</a>
                <a class="collapse-item"  href="../app/proveedores.php">Listar Proveedores</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Utilidades
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Categorias</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Categorias:</h6>
                <a class="collapse-item" data-toggle="modal" data-target="#categoria" href="">Registrar Categoria</a>
                <a class="collapse-item" href="../app/categorias.php">Buscar Categoria</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuarios</span></a>
        <div id="collapse3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Usuarios:</h6>
                <a class="collapse-item" data-toggle="modal" data-target="#cliente"  href="">Registrar Usuario</a>
                <a class="collapse-item" href="../app/clientes.php">Buscar Usuarios</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Informes</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>