document.getElementById("form-1").onsubmit = validaCadastro;

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

  campo = document.getElementById("cnpj");
  erro = document.getElementById("msg-cnpj");
  if ((campo.value == "") || (campo.value.length < 12)) {
    mostraErro(erro, "Preencha o campo CNPJ corretamente!")
  }else{
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
  if (campo.value.length < 5) {
    mostraErro(erro, "Login com no mínimo 5 caracteres!");
  }else{
    ocultaErro(erro);
  }

  campo = document.getElementById("password");
  campoDois = document.getElementById("passwordconf");
  erro = document.getElementById("msg-senhaConfirma");
  if (campo.value != campoDois.value){
    mostraErro(erro, "Senhas diferentes!")
  }else{
    ocultaErro(erro);
  }


  if(contErros > 0)
    return false;
}
