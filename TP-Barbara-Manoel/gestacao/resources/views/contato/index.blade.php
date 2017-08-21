@extends('principal')

@section('conteudo')

<html>

<form action="http://formmail.kinghost.net/formmail.cgi" method="POST">
	<input type="hidden" name="recipient" value="testeiseuemail@gmail.com"> <!-- Pode ser qualquer endereço de email -->
	<input type="hidden" name="redirect" value="http://seudominio"> <!-- Após o envio, o usuário será redirecionado para a página configurada aqui -->
	<input type="hidden" name="subject" value="teste de assunto">  <!-- Assunto da mensagem -->
	<input type="hidden" name="email" value="email@doseudominio">   <!-- Deve ser uma conta de email ativa em seu domínio -->

	<p>
  <br><label for="primeiro">Nome: </label>
  <input type="text" size="30" name="nome" class="form-control">
	</p>

	<p>
  <label for="primeiro">E-mail: </label>
	<input type="text" size="30" name="replyto" class="form-control">
	</p>

	<p>
  <label for="primeiro">Mensagem: </label>
	<input type="text" size="200" name="Comentarios" class="form-control">
	</p>

	<p>
	<input type="submit" name="BTEnvia" value="Enviar" class="btn btn-primary">
	<input type="reset" name="BTApaga" value="Apagar" class="btn btn-primary">
	<a class="btn btn-primary" href="/">Voltar</a><br><br>
 </p>

	</form>

</html>@endsection
