// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
      var forms = document.getElementsByClassName("needs-validation");
      // Faz um loop neles e evita o envio
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();
function validar(){
  var nome = document.getElementById('email').value;
  var nome = document.getElementById('password').value;
  var nome = document.getElementById('nome').value;
  
  if(nome==""){
    document.getElementById('erro-nome').innerHTML = "Ops! Informe o nome"
  }
}