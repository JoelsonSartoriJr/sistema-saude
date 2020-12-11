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
$id = $_SESSION['user'];
$info_user = $xml->xpath("//user[id = '$id']");

console_log($info_user);
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

  <div class="d-flex pl-4 justify-content-center ">
      <ion-icon name="reader-outline"></ion-icon>
      <a href="laboratorio.php" class="d-block text-light p-3">Histórico de exames</a>
    </div>
    <div class="d-flex pl-4 justify-content-center ">
      <ion-icon name="flask-outline"></ion-icon>
      <a href="cadastroExam.php" class="d-block text-light p-3">Cadastro de exames</a>
    </div>
    <div class="d-flex justify-content-center dest">
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
      <p class="h1 pr-5 ">Listas de cadastros</p>
    </div>
    <form class="m-4">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control"  placeholder="Email" value=<?php echo $info_user[0]->email; ?>>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword">Senha</label>
          <input type="password" class="form-control" placeholder="Senha" value=<?php echo $info_user[0]->password; ?>>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Nome completo</label>
          <input type="name" class="form-control"  placeholder="Nome" value=<?php echo $info_user[0]->name; ?>>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAdress">Endereço</label>
          <input type="text" class="form-control" placeholder="Avenida, Número" value=<?php echo $info_user[0]->address; ?>>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputTel">Telefone</label>
          <input type="tel" class="form-control"  placeholder="(99)99999-9999"  placeholder="00.000.000/0000-00" onkeypress="$(this).mask('00.000.000/0000-00')" value=<?php echo $info_user[0]->phone; ?>>
        </div>
        <div class="form-group col-md-6">
          <label for="inputCnpj">CNPJ</label>
          <input type="number" class="form-control"  placeholder="0000-0000" value=<?php echo $info_user[0]->cnpj; ?>>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="exampleFormControlSelect1"></label>
          <select class="form-control" id="exampleFormControlSelect1" value=<?php echo $info_user[0]->type_exam; ?>>
            <option>Mamografia</option>
            <option>Ressonância Magnética</option>
            <option>Ultra-sonografia</option>
            <option>Ecografia</option>
            <option>Exame de sangue</option>
          </select>
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