# Formulario_php
<!DOCTYPE html>
<html>
<head>
   <title>Fomulário Para Cadastro</title>
</head>
<body>

<form method="POST" id="cFormulario" action="dados.php">
<fieldset id="cadastro"><legend> Formulário de Cadastro</legend>
<p>Nome: <input type="text" name="tNome" id="cNome" size="25" maxlength="30" placeholder="Nome Completo"></p> 
<p>E-mail <input type="E-mail" name="tMail" id="cMail" size="25" maxlength="40" placeholder="E-Mail"></p> 
<p>CPF ou CNPJ <input type="text" name="tCPF" id="cCPF" size="25" maxlength="40"></p> 
<p>Telefone <input type="text" name="tTel" id="cTel" size="25" maxlength="40"></p>
<p>CEP <input type="text" name="tCEP" id="" size="25" maxlength="40"></p> 
<p>Logradouro <input type="text" name="tLogradouro" id="cLogradouro" size="40" maxlength="50" placeholder="Rua, Av, Trav."></p> 
<p>Número <input type="number" name="tNumero" id="cNumero" size="10" maxlength="10" min="0" max="99999"></p> 
<p>Bairro <input type="text" name="tBairro" id="cBairro" size="25" maxlength="40" placeholder="Digite seu bairro"></p> 
<p>Cidade <input type="text" name="tCidade" id="cCidade" size="25" maxlength="40" placeholder="Digite sua cidade"></p> 
<p> <label for="cEst">Estado</label>
<select name="tEst" id="cEst"> 
   <option value="SP">São Paulo</option>
   <option value="RJ">Rio de Janeiro</option>
   <option value="MG">Minas Gerais</option>
   <option value="RN">Rio Grande do Sul</option>
   <option value="RS">Rio Grande do Norte</option>
   <option value="MA">Maranhão</option>
   <option value="MT">Mato Grosso</option>
   <option value="MS">Mato Grosso do Sul</option>
   <option value="AC">Acre</option>
   <option value="BA">Bahia</option>
</select></p> <br>
<input type="submit" name="tEnviar" value="Enviar">
</fieldset>



</form>
</body>
</html>
