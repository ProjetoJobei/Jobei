<?php 
    include './conecta.php';
    $consulta = "SELECT * FROM usuario";
    $consulta1 = "SELECT * FROM produto";
    $consulta2 = "SELECT * FROM pagamento";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Testes de conexão</title>
	</head>
	<body>		
		<section id="slider">
        <div class="container">
				<h3>Usuarios</h3>
				<table>
					<thead>
						<tr>
							<th scope="col">ID </th>
							<th scope="col">Nome </th>
                            <th scope="col">Nome Completo </th>
                            <th scope="col">Email </th>  
                            <th scope="col">Senha </th>  
							<th scope="col">Nivel </th>  
                            <th scope="col">Gênero </th>  
                            <th scope="col">Cidade </th>  
							<th scope="col">Estado </th>     
						</tr>
					</thead>            
					<?php 
					foreach ($conexao -> query($consulta) as $linha) {
					?>                
						<tbody>
							<tr>
								<td><?php echo $linha['user_id']; ?></td>
								<td><?php echo $linha['nome']; ?></td>
                                <td><?php echo $linha['nome_completo']; ?></td>
								<td><?php echo $linha['email']; ?></td>
                                <td><?php echo $linha['senha']; ?></td>
								<td><?php echo $linha['nivel']; ?></td>
                                <td><?php echo $linha['genero']; ?></td>
                                <td><?php echo $linha['cidade']; ?></td>
								<td><?php echo $linha['estado']; ?></td>
							</tr>
						</tbody>
					<?php
					}
					?>
				</table>				
			</div>

			<div>
				<h3>Produtos</h3>
				<table>
					<thead>
						<tr>
							<th scope="col">Código do produto </th>
							<th scope="col">Nome </th>
                            <th scope="col">Descrição </th> 
                            <th scope="col">Autor </th>  
                            <th scope="col">Data </th>  
							<th scope="col">Mídia </th>                               
                            <th scope="col">Especificações Técnicas </th>  
                            <th scope="col">Itens inclusos </th>  
                            <th scope="col">Categoria </th> 
                            <th scope="col">Atenção </th> 
						</tr>
					</thead>            
					<?php 
					foreach ($conexao -> query($consulta1) as $linha) {
					?>                
						<tbody>
							<tr>
								<td><?php echo $linha['cod_produto']; ?></td>
								<td><?php echo $linha['nome_produto']; ?></td>
								<td><?php echo $linha['descricao_produto']; ?></td>
                                <td><?php echo $linha['autor']; ?></td>
                                <td><?php echo $linha['data_publicacao']; ?></td>
								<td> <img src="<?php echo $linha['midia_produto']; ?>"> </td>
                                <td><?php echo $linha['especificacoes']; ?></td>
                                <td><?php echo $linha['itens_inclusos']; ?></td>
                                <td><?php echo $linha['categoria']; ?></td>
                                <td><?php echo $linha['aviso']; ?></td>
							</tr>
						</tbody>
					<?php
					}
					?>
				</table>				
			</div>

            <div>
				<h3>Pagamentos</h3>
				<table>
					<thead>
						<tr>
							<th scope="col">Código do pagamento </th>
							<th scope="col">Tipo </th>
                            <th scope="col">Número do cartão </th> 
                            <th scope="col">CVC </th>  
                            <th scope="col">Mês de expiração </th>  
							<th scope="col">Ano de expiração </th>     
						</tr>
					</thead>            
					<?php 
					foreach ($conexao -> query($consulta2) as $linha) {
					?>                
						<tbody>
							<tr>
								<td><?php echo $linha['cod_pagamento']; ?></td>
								<td><?php echo $linha['tipo_pagamento']; ?></td>
								<td><?php echo $linha['numero_cartao']; ?></td>
                                <td><?php echo $linha['cvc']; ?></td>
                                <td><?php echo $linha['mes_expira']; ?></td>
                                <td><?php echo $linha['ano_expira']; ?></td>
							</tr>
						</tbody> 
					<?php
					}
					?>
				</table>				
			</div>
		</section>
	</body>
</html>
