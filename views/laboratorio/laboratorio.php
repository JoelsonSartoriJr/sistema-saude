<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'][3] == 'lab') {
  require_once('../../login/conexao.php');
  require_once('../../utils/Utils.php');
  $id = $_SESSION['user'][0];
  $sql = "SELECT * FROM exam WHERE id_lab= $id";
  $result = $conn->query($sql);
  $rows = $result->fetchAll();
  $cont = $result->rowCount();
} else {
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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/form.css">
  <link rel="stylesheet" href="../../assets/css/sidebar.css">
  <link rel="stylesheet" href="../../assets/css/table.css">
  <link rel="stylesheet" href="../../assets/css/topbar.css">
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
  <!--Histórico de exames-->
  <div class="d-flex bg-white">

    <!--Sidebar-->
    <div id="sidebar-container" class="bg-gradient">
      <div class=" logo d-flex justify-content-center rounded-circle">
        <img src="../../assets/img/medica.jpg" class="rounded-circle">
        <div class="nome">
          <p class="font-weight-bold"><?php echo $_SESSION['user'][1] ?></p>
          <p>Laboratório</p>
        </div>
      </div>
      <div class="menu">

        <div class="d-flex pl-4 justify-content-center dest">
          <ion-icon name="reader-outline"></ion-icon>
          <a href="laboratorio.php" class="d-block text-light p-3">Histórico de exames</a>
        </div>
        <div class="d-flex pl-4 justify-content-center">
          <ion-icon name="flask-outline"></ion-icon>
          <a href="cadastroExam.php" class="d-block text-light p-3">Cadastro de exames</a>
        </div>
        <div class="d-flex justify-content-center">
          <ion-icon ion-icon name="fitness-outline"></ion-icon>
          <a href="alteraCadastro.php" class="d-block text-light p-3">Alterar cadastro</a>
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
        <div class="d-flex flex-row">
          <p class="h1 pr-5 ">Histórico de consultas</p>
          <p class="mt-auto">Quantidade de consultas: <?php echo $cont ?></p>
        </div>
      </div>

      <div class="table-responsive p-2">
        <table id="datas" class="table table-striped bg-white">
          <thead class="thead-dark">
            <th>Paciente</th>
            <th>Tipo de exame</th>
            <th>Resultado</th>
            <th>Data</th>
          </thead>
          <?php
          foreach ($rows as $user) {
            console_log($user);

            $patient = $user[2];
            $type_exam = $user[8];
            $result = $user[9];
            $data = $user[4];
          ?>
            <tr>
              <td> <?php echo $patient; ?> </td>
              <td> <?php echo $type_exam; ?> </td>
              <td> <?php echo $result; ?> </td>
              <td> <?php echo $data; ?> </td>
            </tr>
          <?php } ?>
        </table>
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