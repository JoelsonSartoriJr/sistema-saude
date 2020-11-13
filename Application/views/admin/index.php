<!-- Barra Lateral -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Marca -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexAdmin.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistema de saúde</div>
    </a>

    <!-- Divisor -->
    <hr class="sidebar-divider my-0">


    <!-- Título -->
    <div class="sidebar-heading">
        Cadastros
    </div>

    <!-- Tipos de cadastros -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="CadastroPaciente.html" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cadastrar Pacientes</span>
        </a>
        <a class="nav-link collapsed" href="CadastroMed.html" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cadastrar Médicos</span>
        </a>
        <a class="nav-link collapsed" href="CadastroLab.html" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cadastrar Laboratórios</span>
        </a>
        <a class="nav-link collapsed" href="IndexCadastrados-admin.html" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cadastrados</span>
        </a>
        
    </li>

</ul>
<!-- Final do sidebar -->

<!-- Content da página -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Barra Superior -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle"
                            src="../../../public/assets/img/medico.png">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
             <!-- DataTales Example -->
             <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cadastrados</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Tipo</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Matheus</td>
                                    <td>991520660</td>
                                    <td>matheuss.sls@gmail.com</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Matheus</td>
                                    <td>991520660</td>
                                    <td>matheuss.sls@gmail.com</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Matheus</td>
                                    <td>991520660</td>
                                    <td>matheuss.sls@gmail.com</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Matheus</td>
                                    <td>991520660</td>
                                    <td>matheuss.sls@gmail.com</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Matheus</td>
                                    <td>991520660</td>
                                    <td>matheuss.sls@gmail.com</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Matheus</td>
                                    <td>991520660</td>
                                    <td>matheuss.sls@gmail.com</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>Matheus</td>
                                    <td>991520660</td>
                                    <td>matheuss.sls@gmail.com</td>
                                    <td>admin</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Matheus && Joelson</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja Sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Selecione "Sair" caso vocês tenha certeza de que deseja encerrar o acesso.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
    </div>
</div>
</div>