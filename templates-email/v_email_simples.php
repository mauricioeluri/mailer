<!DOCTYPE html>
<html>
		<body style="text-align: center">
				<h2>Nova mensagem do site customsys</h2>
				<table style='margin:auto' border=1 cellpadding=6>
						<tr>
								<th>Nome</th>
								<td><?= $nome ?></td>
						</tr>
						<tr>
								<th>E-mail</th>
								<td><?= $email ?></td>
						</tr>
						<tr>
								<th>Telefone</th>
								<td><?= $tel ?></td>
						</tr>
						<tr>
								<th>Mensagem</th>
								<td><?= $mensagem ?></td>
						</tr>
				</table>
				<hr />

				<small>Esta mensagem foi enviada diretamente pelo site:
					<a href="https://customsys.com.br">https://customsys.com.br</a>
				</small>
				<br />
				<small>Para mais informações, contate: mauriciom.eluri@gmail.com</small>
		</body>
</html>
