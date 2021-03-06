<?php
session_start();

if(isset($_SESSION['user']) && $_SESSION['user'][3] == 'admin'){

}else{
  $_SESSION['erro'] = "Usuario invalido!";
  header("Location: http://localhost:8000");
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/form.css">
    <link rel="stylesheet" href="../../assets/css/sidebar.css">
    <link rel="stylesheet" href="../../assets/css/table.css">
    <link rel="stylesheet" href="../../assets/css/topbar.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    if (isset($_SESSION['erro'])) {
	    	$erro = $_SESSION['erro'];
	    	echo "<script type='text/javascript'>alert('$erro');</script>";
	    	unset($_SESSION['erro']);
	    }
	  ?>
  </head>
  <body>
  <div class="d-flex bg-white">

<!--Sidebar-->
<div id="sidebar-container" class="bg-gradient">
  <div class="logo d-flex justify-content-center rounded-circle">
    <img src="/assets/img/medica.jpg" class="rounded-circle">
    <div class="nome">
      <p class="font-weight-bold"><?php echo $_SESSION['name']?></p>
      <p>Admin</p>
    </div>
  </div>
  <div class="menu">

    <div class="d-flex pl-4 justify-content-center ">
      <ion-icon name="reader-outline"></ion-icon>
      <a href="admin.php" class="d-block text-light p-3">Lista de Cadastrados</a>
    </div>
    <div class="d-flex pl-4 justify-content-center">
      <ion-icon name="flask-outline"></ion-icon>
      <a href="cadastroLab.php" class="d-block text-light p-3">Cadastro Laboratório</a>
    </div>
    <div class="d-flex justify-content-center">
      <ion-icon ion-icon name="fitness-outline"></ion-icon>
      <a href="cadastroMed.php" class="d-block text-light p-3">Cadastro Médico</a>
    </div>
    <div class="d-flex justify-content-center dest">
      <ion-icon name="person-outline"></ion-icon>
      <a href="cadastroPac.php" class="d-block text-light p-3">Cadastro Paciente</a>
    </div>
    <div class="d-flex justify-content-center">
      <ion-icon name="person-outline"></ion-icon>
      <a href="../../index.php" class="d-block text-light p-3">Sair</a>
    </div>
  </div>
</div>

<!--Topbar + Conteúdo-->
<div>
  <div id="topbar-container" class="shadow p-3 bg-white rounded">
    <p class="h1 pr-5 ">Cadastro de paciente</p>
  </div>

  <form class="m-4 text-center" method="POST" action="../../register/Patient.php">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="form-group col-md-6">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nome completo</label>
        <input type="text" class="form-control" name="name" placeholder="Nome" required>
      </div>
      <div class="form-group col-md-6">
          <label for="inputPassword4">Endereço</label>
          <input type="text" class="form-control" name="address" placeholder="Avenida, Número" required>
        </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control" name="phone"  placeholder="(00) 00000-0000" onkeypress="$(this).mask('(00) 00000-0000')" required>
      </div>
      <div class="form-group col-md-6">
        <label for="gender">Gênero</label>
        <input type="text" class="form-control" name="gender" placeholder="Masculino,Feminino" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="data_nasc">Data de nascimento</label>
        <input type="date" class="form-control" name="date_nasc" placeholder="16/01/1995" required>
      </div>
      <div class="form-group col-md-6">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00');" required>
      </div>
    </div>

    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>

</div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  </body>
</html>

