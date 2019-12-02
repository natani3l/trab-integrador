document.getElementById("form-2").onsubmit = validaCadastro;

function mostraErro(idErro, mensagem){
	idErro.style.display = "block";
	idErro.innerHTML = mensagem;
	contErros++;
}

function ocultaErro(idErro){
	idErro.style.display = "none";
}
function validaCadastro(){
  contErros = 0;
  campo = document.getElementById("nome");
  erro = document.getElementById("msg-nome");
  if(campo.value == ""){
    mostraErro(erro, "Por favor digite um nome");
    }
  else{
    ocultaErro(erro);
  }

  campo = document.getElementById("email");
	erro = document.getElementById("msg-email");
	if((campo.value == "") || (campo.value.indexOf("@") == -1)){
		mostraErro(erro, "Por favor digite o E-mail");
    }
	else{
		ocultaErro(erro);
  }

  campo = document.getElementById("login");
	erro = document.getElementById("msg-login");
	if(campo.value == ""){
		mostraErro(erro, "Por favor digite um login");
  }else if (campo.value.length < 6) {
    mostraErro(erro, "Login precisa ter 6 caracteres ou mais");
  }
	else{
		ocultaErro(erro);
  }


  campo = document.getElementById("password");
  campoDois = document.getElementById("passwordconf");
  erro = document.getElementById("msg-senhaConfirma");
  erroSenha = document.getElementById("msg-senha");
  if (campo.value != campoDois.value){
    mostraErro(erro, "Senhas diferentes!")
  }else if (campo.value.length < 6) {
    mostraErro(erroSenha, "Campo senha com menos de 6 caracteres");
  }else{
    ocultaErro(erro);
  }

  if(contErros > 0){
    return false;
  }



}
