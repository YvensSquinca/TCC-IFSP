// Abre e Fecha Sidenav
$(document).ready(function() {
  function toggleSidebar() {
      $(".button").toggleClass("active");
      $("main").toggleClass("move-to-left");
      $(".sidebar-item").toggleClass("active");
  }
  $(".button").on("click tap", function() {
      toggleSidebar();
  });
  $(document).keyup(function(e) {
      if (e.keyCode === 27) {
          toggleSidebar();
      }
  });
});

function validar() {
  var nome = form1.nome.value;
  var txttelefone = form1.txttelefone.value;
  var email = form1.email.value;
  var mensagem = form1.mensagem.value;
  var fileUpload = document.getElementById("imagem");
  if (nome == "") {
      alert('Preencha o campo NOME');
      form1.nome.focus();
      return false;
  }
  if (txttelefone == "") {
    alert('Preencha o campo TELEFONE');
    form1.txttelefone.focus();
    return false;
}
  if (email == "") {
      alert('Preencha o campo EMAIL');
      form1.email.focus();
      return false;
  }
  if (mensagem == "") {
      alert('Preencha o campo MENSAGEM');
      form1.mensagem.focus();
      return false;
  }
  if (fileUpload.files.length == 0) {
      alert("Nenhum Arquivo Selecionado");
  return false;
  }
  if (fileUpload.files[0].type.indexOf("image") != 0) {
      alert("Este arquivo não é uma imagem");
  return false;
  }
}

var upload = document.getElementById("imagem");
upload.addEventListener("change", function(e) {
  var size = upload.files[0].size;
  if(size < 2097152) { //2MB         
  alert('Imagem Permitida'); //Abaixo do permitido
  } else {           
  alert('Imagem Maior que o Permitido'); //Acima do limite
  upload.value = ""; //Limpa o campo          
  }
  e.preventDefault();
}); 
function limite_textarea(valor) {
  quant = 350;
  total = valor.length;
  if(total <= quant) {
      resto = quant - total;
      document.getElementById('cont').innerHTML = resto;
  } else {
      document.getElementById('mensagem').value = valor.substr(0,quant);
  }
}    

window.onscroll = function() {scrollFunction()};
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}    

$("#txttelefone").mask("(00) 00009-0000");

