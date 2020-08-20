<form action="cadastram.php" method="POST">
    Cadastro de Medicos</br>
	Nome: <input required="required" type="text" name="nome_app" maxlength="30"><br />
	Telefone: <input required="required" type="tel" name="telefone_app" maxlength="11"><br />
	E-mail: <input required="required" type="email" placeholder="email@email.com" name="email_app" maxlength="30"><br />
	Endereco: <input required="required" type="text" name="endereco_app" maxlength="50"><br />
	Especialidade: <input required="required" type="text" name="especialidade_app" maxlength="20"><br />
	
	<input type="submit" value="Cadastrar">
</form>