<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'][3] == 'patient') {
  require_once('../../utils/Utils.php');
  require_once('../../login/conexao.php');
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
          <p>Paciente</p>
        </div>
      </div>
      <div class="menu">

        <div class="d-flex pl-4 justify-content-center dest">
          <ion-icon name="flask-outline"></ion-icon>
          <a href="paciente.php" class="d-block text-light p-3">Historico de Exames</a>
        </div>
        <div class="d-flex pl-4 justify-content-center">
          <ion-icon name="flask-outline"></ion-icon>
          <a href="histCon.php" class="d-block text-light p-3">Historico de Consultas</a>
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
        <p class="h1 pr-5 ">Historico de Exames</p>
      </div>

      <div class="table-responsive p-2">
        <table id="datas" class="table table-striped bg-white">
          <thead class="thead-dark">
            <th>Laboratorio</th>
            <th>Tipo exame</th>
            <th>Hora</th>
            <th>Data</th>
          </thead>
          <?php
          $patient = $_SESSION['user'][1];
          $result = $conn->query("SELECT * FROM exam WHERE patient= '$patient'");
          $rows = $result->fetchAll();
          console_log($rows);
          foreach ($rows as $user) {
            $lab = $user[2];
            $type_exam = $user[9];
            $hour = $user[5];
            $data = $user[6];
            
          ?>
            <tr>
              <td> <?php echo $lab; ?> </td>
              <td> <?php echo $type_exam; ?> </td>
              <td> <?php echo $hour; ?> </td>
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