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

$xml = simplexml_load_file('../../date/date.xml');
$lab = $xml->xpath("//user[type = 'lab']");
$patient = $xml->xpath("//user[type = 'patient']");
$doctor = $xml->xpath("//user[type = 'doctor']");

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
      <p class="font-weight-bold"><?php echo $_SESSION['name']?></p>
      <p>Laboratório</p>
    </div>
  </div>
  <div class="menu">

  <div class="d-flex pl-4 justify-content-center">
      <ion-icon name="reader-outline"></ion-icon>
      <a href="laboratorio.php" class="d-block text-light p-3">Histórico de exames</a>
    </div>
    <div class="d-flex pl-4 justify-content-center dest">
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
      <p class="h1 pr-5 ">Cadastro de Exames</p>
    </div>

    <form class="m-4 text-center needs-validation"   method="POST" action="../../register/Exam.php">
      <div class="form-row pt-2">
        <div class="form-group col">
          <label for="inputState">Laborátorio</label>
          <select name="lab" class="form-control">
            <?php
              foreach($lab as $user){
                $name_lab = $user->name;
            ?>
            <option selected><?php echo $name_lab; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group col">
          <label for="inputState">Paciente</label>
          <select name="patient" class="form-control">
            <?php
              foreach($patient as $user){
                $name_patient = $user->name;
            ?>
            <option selected><?php echo $name_patient; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group col">
          <label for="inputState">Médico</label>
          <select name="doctor" class="form-control">
            <?php
              foreach($doctor as $user){
                $name_doctor = $user->name;
            ?>
            <option selected><?php echo $name_doctor; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-row pt-2">
        <div class="form-group col">
          <label>Hora</label>
          <input type="time" name="hour" class="form-control" required/>
        </div>
        <div class="form-group col">
          <label>Data</label>
          <input type="date" name="date" class="form-control" required/>
        </div>
        <div class="form-group col">
          <label>Tipo exame</label>
          <input type="text" name="type_exam" class="form-control" required/>
        </div>
      </div>
      <div class="form-row pt-2">
        <div class="form-group col">
          <label>Observação</label>
          <textarea type="text" name="obs" class="form-control" required rows="4"></textarea>
        </div>
        <div class="form-group col">
          <label>Outros</label>
          <textarea type="text" name="others" class="form-control" required rows="4"></textarea>
        </div>
        <div class="form-group col">
          <label>Resultados</label>
          <textarea  type="text" name="result" class="form-control" require rows="4"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
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