<div class="d-flex bg-white">

  <!--Sidebar-->
  <div id="sidebar-container" class="bg-gradient">
    <div class="logo d-flex justify-content-center rounded-circle">
      <img src="/assets/img/medica.jpg" class="rounded-circle">
      <div class="nome">
        <p class="font-weight-bold"> Boa Vida</p>
        <p>Laboratorio</p>
      </div>
    </div>
    <div class="menu">

      <div class="d-flex pl-4 justify-content-center ">
          <ion-icon name="reader-outline"></ion-icon>
          <a href="admin" class="d-block text-light p-3">Histórico de consultas</a>
        </div>
        <div class="d-flex pl-4 justify-content-center dest">
          <ion-icon name="flask-outline"></ion-icon>
          <a href="laboratorio" class="d-block text-light p-3">Cadastro de consultas</a>
        </div>
        <div class="d-flex justify-content-center">
          <ion-icon ion-icon name="fitness-outline"></ion-icon>
          <a href="#" class="d-block text-light p-3">Alterar cadastro</a>
        </div>

      </div>
  </div>

  <!--Topbar + Conteúdo-->
  <div>
    <div id="topbar-container" class="shadow p-3 bg-white rounded">
      <p class="h1 pr-5 ">Cadastro de Exames</p>
    </div>

    <form class="m-4">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Data</label>
          <input type="date" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-06">
          <label for="exampleFormControlSelect1">Laboratório</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Boa vida</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-06">
          <label for="exampleFormControlSelect1">Paciente</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Joana Silveira</option>
          </select>
        </div>
        <div class="form-group col-md-06">
          <label for="exampleFormControlSelect1">Tipo de exame</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Ressonância</option>
            <option>Ultrassonografia</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Resultado</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="doença">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

</div>