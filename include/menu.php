 <!--inicio menú -->
 <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex algin-items-left">
            <button type="button" 
                 class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            </div>
            <div class="d-flex algin-items-center">
                <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn header-item waves-effect" 
                id="page-header-user-dropdown" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">
            Usuario
            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item d-flex align-items-center
        justify-content-between " href="javascript:void(0)">
          Mi perfil
          </a>

          <a class="dropdown-item d-flex align-items-center
        justify-content-between " href="javascript:void(0)">
          Cerrar Sesion
          </a>
                </div>


            </div>


        </div>


    </header>
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div class="navbar-brand-box">
               <a href="" class="logo">
               <!--va el logo, puede ser imagen o texto-->
                LOGO
             
               </a>
            </div>
            <div>

            <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menú</li>
                <li>
                    <a href="" class="waves-effect"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li>
                    <a href="ventas.php" class="waves-effect"><i class="fas fa-gift"></i>Ventas</a>
                    <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ventas.php">Ventas</a></li>
                            <li><a href="detalle_venta.php">Detalle de Venta</a></li>
                        </ul>
                </li>
                <li>
                    <a href="producto.php"  class="waves-effect"><i class="fas fa-shopping-bag"></i>Producto</a>
                </li>
                
                <li>
                    <a href=""  class="waves-effect"><i class="fas fa-reply"></i>Devoluciones</a>
                    
                  </li>
                <li>
                    <a href="formulario.php"  class="waves-effect"><i class="fas fa-user-friends"></i>Usuario</a>
                </li>
                <li>
                    <a href="pedidos.php"  class="waves-effect"><i class="fas fa-cart-plus"></i>Pedidos</a>
                    <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ventas.php">Pedidos</a></li>
                            <li><a href="detalle_venta.php">Detalle de Pedidos</a></li>
                        </ul>
                </li>
                
                <li>
                    <a href="formulario.php"  class="waves-effect"><i class="fas fa-users"></i>Clientes</a>
                </li>
                <li>
                    <a href="proveedor.php"  class="waves-effect"><i class="fas fa-truck"></i>Proveedores</a>
                </li>
                <li>
                    <a href="reporte.php"  class="waves-effect"><i class="far fa-file-alt"></i>Reportes</a>
                </li>
                
                <li>
                    <a href="javascript: void(0);"  class="has-arro waves-effect"><i class="fas fa-users-cog"></i>Manteniminento</a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="sistema.php">Datos de Sistema</a></li>
                        <li><a href="empresa.php">Datos de Empresa</a></li>
                        <li><a href="roles.php">Roles</a></li>
                        <li><a href="">Categoría</a></li>
                    </ul>
                </li>
                
            </ul>
            </div>
        </div>
    </div>
    </div>

     <!--final menú -->