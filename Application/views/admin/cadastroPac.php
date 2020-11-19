<div class="d-flex bg-white">

  <!--Sidebar-->
  <div id="sidebar-container" class="bg-gradient">
    <div class="logo d-flex justify-content-center rounded-circle">
      <img src="/assets/img/medica.jpg" class="rounded-circle">
      <div class="nome">
        <p class="font-weight-bold"> Joana Silveira</p>
        <p>Admin</p>
      </div>
    </div>
    <div class="menu">

      <div class="d-flex pl-4 justify-content-center">
        <ion-icon name="reader-outline"></ion-icon>
        <a href="#" class="d-block text-light p-3">Lista de Cadastrados</a>
      </div>
      <div class="d-flex pl-4 justify-content-center">
        <ion-icon name="flask-outline"></ion-icon>
        <a href="#" class="d-block text-light p-3">Cadastro Laboratório</a>
      </div>
      <div class="d-flex justify-content-center">
        <ion-icon ion-icon name="fitness-outline"></ion-icon>
        <a href="#" class="d-block text-light p-3">Cadastro Médico</a>
      </div>
      <div class="d-flex justify-content-center dest">
        <ion-icon name="person-outline"></ion-icon>
        <a href="#" class="d-block text-light p-3">Cadastro Paciente</a>
      </div>

    </div>
  </div>

  <!--Topbar + Conteúdo-->
  <div>
    <div id="topbar-container" class="shadow p-3 bg-white rounded">
      <p class="h1 pr-5 ">Cadastro de paciente</p>
    </div>

    <form class="m-4">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nome completo</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Nome">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Endereço</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Avenida, Rua">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Telefone</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="(99)99999-9999">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Gênero</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Masculino,Feminino">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPassword4">Idade</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="18">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">CPF</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="CPF">
        </div>
      </div>
  
      
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

</div>