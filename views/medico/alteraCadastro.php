<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'][3] == 'doctor') {
  require_once('../../login/conexao.php');
  require_once('../../utils/Utils.php');
  $id = $_SESSION['user'][0];
  $sql = "SELECT * FROM doctor WHERE id_user= $id";
  $result = $conn->query($sql);
  $rows = $result->fetchAll();
  $address = $rows[0][3];
  $phone = $rows[0][2];
  $crm = $rows[0][0];
  $specialty = $rows[0][4];
} else {
  $_SESSION['erro'] = "Usuario invalido!";
  header("Location: http://localhost:8000");
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
      <div class=" logo d-flex justify-content-center rounded-circle">
        <img src="/assets/img/medica.jpg" class="rounded-circle">
        <div class="nome">
          <p class="font-weight-bold"><?php echo $_SESSION['user'][1] ?></p>
          <p>Medico</p>
        </div>
      </div>
      <div class="menu">

        <div class="d-flex pl-4 justify-content-center">
          <ion-icon name="flask-outline"></ion-icon>
          <a href="medico.php" class="d-block text-light p-3">Lista de Consultas</a>
        </div>
        <div class="d-flex justify-content-center">
          <ion-icon ion-icon name="fitness-outline"></ion-icon>
          <a href="cadastroCon.php" class="d-block text-light p-3">Cadastro Consultas</a>
        </div>
        <div class="d-flex justify-content-center dest">
          <ion-icon name="person-outline"></ion-icon>
          <a href="alteraCadastro.php" class="d-block text-light p-3">Altera Cadastro</a>
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
        <p class="h1 pr-5 ">Altera Cadastro</p>
      </div>

      <form class="m-4">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['user'][2]; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword">Senha</label>
            <input type="password" class="form-control" placeholder="Senha" >
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName">Nome completo</label>
            <input type="name" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['user'][1]; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Endereço</label>
            <input type="text" class="form-control" placeholder="Avenida, Rua" value="<?php echo $address?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputTel">Telefone</label>
            <input type="tel" class="form-control" placeholder="(53)99923-3659" placeholder="00.000.000/0000-00" onkeypress="$(this).mask('00.000.000/0000-00')" onkeypress="$(this).mask('(00) 0000-00009')" s value="<?php echo $phone?>">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Especialidade:</label>
            <select class="form-control" id="exampleFormControlSelect1" >
              <option><?php echo $specialty?></option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">CRM</label>
            <input type="text" class="form-control" placeholder="00000000" value="<?php echo $crm?>">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
    </div>

  </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>