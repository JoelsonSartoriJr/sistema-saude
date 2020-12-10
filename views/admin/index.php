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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/table.css">
    <link rel="stylesheet" href="../../assets/css/topbar.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex bg-white">
      <!--Sidebar-->
      <div id="sidebar-container" class="bg-gradient">
          <div class=" logo d-flex justify-content-center rounded-circle">
            <img src="/assets/img/medica.jpg" class="rounded-circle">
            <div class="nome">
              <p class="font-weight-bold"> Joana Silveira</p>
              <p>Admin</p>
            </div>
          </div>
          <div class="menu">

            <div class="d-flex pl-4 justify-content-center dest">
              <ion-icon name="reader-outline"></ion-icon>
              <a href="admin" class="d-block text-light p-3">Lista de Cadastrados</a>
            </div>
            <div class="d-flex pl-4 justify-content-center">
              <ion-icon name="flask-outline"></ion-icon>
              <a href="\admin\cadastroLab" class="d-block text-light p-3">Cadastro Laboratório</a>
            </div>
            <div class="d-flex justify-content-center">
              <ion-icon ion-icon name="fitness-outline"></ion-icon>
              <a href="\admin\cadastroMed" class="d-block text-light p-3">Cadastro Médico</a>
            </div>
            <div class="d-flex justify-content-center">
              <ion-icon name="person-outline"></ion-icon>
              <a href="\admin\cadastroPac" class="d-block text-light p-3">Cadastro Paciente</a>
            </div>

          </div>
      </div>

      <!--Topbar + Conteúdo-->
      <div>
          <div id="topbar-container" class="shadow p-3 bg-white rounded">
            <p class="h1 pr-5 ">Lista de cadastrados</p>
          </div>

          <table class="table table-striped bg-white m-2 ">
            <thead class="thead-dark">
              <tr>
                <th scope="col"></th>
                <th scope="col">Tipo</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Médico</td>
                <td>Otto</td>
                <td>Avenida Itália,2111</td>
                <td>991456578</td>
                <td>Otto@gmail.com</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Médico</td>
                <td>Otto</td>
                <td>Avenida Itália,2111</td>
                <td>991456578</td>
                <td>Otto@gmail.com</td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Médico</td>
                <td>Otto</td>
                <td>Avenida Itália,2111</td>
                <td>991456578</td>
                <td>Otto@gmail.com</td>

              </tr>
            </tbody>
          </table>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>