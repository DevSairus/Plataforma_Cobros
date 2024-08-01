<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin/dashboard'); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Sistema de Préstamos</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Inicio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/customers'); ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Clientes</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/coins'); ?>">
        <i class="fas fa-fw fa-money-bill"></i>
        <span>Moneda</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/loans'); ?>">
        <i class="fa fa-university" aria-hidden="true"></i>
        <span>Prestamos</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin/payments'); ?>">
        <i class="fa fa-credit-card" aria-hidden="true"></i>
        <span>Pagos</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReportes" aria-expanded="false" aria-controls="collapseReports">
        <i class="fa fa-print"></i>
        <span>Reportes</span>
    </a>
    <div id="collapseReportes" class="collapse" aria-labellebdy="headingUtilities" data-parent="#accordionSidebar" style="">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('admin/reports'); ?>">Resumen General</a>
            <a class="collapse-item" href="<?php echo site_url('admin/reports/dates'); ?>">Entre fechas</a>
            <a class="collapse-item" href="<?php echo site_url('admin/reports/customers'); ?>">General por cliente</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConfig" aria-expanded="false" aria-controls="collapseConfig">
        <i class="fa fa-cog"></i>
        <span>Configuración</span>
    </a>
    <div id="collapseConfig" class="collapse" aria-labellebdy="headingUtilities" data-parent="#accordionSidebar" style="">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('admin/config'); ?>">Editar datos</a>
            <a class="collapse-item" href="<?php echo site_url('admin/config/change_password'); ?>">Cambiar contraseña</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>