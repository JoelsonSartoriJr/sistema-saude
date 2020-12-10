<?php
session_start();

require_once '../../utils/Utils.php';

if (!isset($_SESSION['user'])) {
    console_log('Usuario não está logado');
    header("Location: index.php");
}
if ($_SESSION['type'] != 'lab') {
    console_log('Usuario não é laboratorio...');
    header("Location: index.php");
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
  </head>
  <body>
      <!--Histórico de exames-->
<div class="d-flex bg-white">

<!--Sidebar-->
<div id="sidebar-container" class="bg-gradient">
  <div class=" logo d-flex justify-content-center rounded-circle">
    <img src="../../assets/img/medica.jpg" class="rounded-circle">
    <div class="nome">
      <p class="font-weight-bold"><?php echo $_SESSION['name']?></p>
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
    <p class="h1 pr-5 ">Histórico de consultas</p>
  </div>

  <div class="table-responsive p-2">
    <table id="datas" class="table table-striped table-dark" >
      <thead style="color:black;" >
        <th>Paciente</th>
        <th>Tipo de exame</th>
        <th>Resultado</th>
        <th>Data</th>
      </thead>
      <?php
        $xml = simplexml_load_file('../../date/date.xml')  or die ("Failed to load");
        $exames = $xml->exames;
        $qnt = count($exames->exame);
        foreach($exames->exame as $exame){
          $patient = $exame->patient;
          $type_exam = $exame->type_exam;
          $result = $exame->result;
          $data = $exame->data;
          ?>
          <tr>
            <td> <?php echo $patient ;?> </td>
            <td> <?php echo $type_exam ;?> </td>
            <td> <?php echo $result ;?> </td>
            <td> <?php echo $data ;?> </td>
          </tr>
        <?php }?>
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