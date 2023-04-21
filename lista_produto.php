<?php
	session_start();
	include "seguranca.php";
	include "conexao_sql.php";

 
	$query2 = mysqli_query($conexao,"SELECT codigo,produto,quantidade,valor FROM produto WHERE usuario='$usuario' ORDER BY codigo");  
    $num_rows = mysqli_num_rows($query2);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<style>
			table tbody, table thead{
				display: block;
			}
			table tbody{
				overflow: auto;
				height: 100px;
			}	
			th{
				width: 100px;
			}
			td{
				width: 100px;
			}
	    </style>
	</head>
	<body role="document">
		<div class="container theme-showcase" role="main">
		<div class="row">
		<form class="form-horizontal" method="POST" >
		  <div class="form-group">
				<h1>Lista de Produtos</h1>
			</div>
			<div class="col-md-12">
			  <table>
						<tr>
							<th>Codigo:</th>
							<th>Produto</th>
							<th>Quantidade</th>
							<th>Valor</th>
						</tr>
			  <?php
				if($num_rows == 0){
					echo "<tr>";
						echo "<td>Nenhum contato encontrado para o usuário ativado.</td>";
					echo "</tr>";
				}
				else{
					while($num_rows = mysqli_fetch_array($query2)){;
						echo "<tr>";
						echo "<td>".$num_rows['codigo']."</td>";
						echo "<td>".$num_rows['produto']."</td>";
						echo "<td>".$num_rows['quantidade']."</td>";
						echo "<td>".$num_rows['valor']."</td>";                         
						echo "</tr>";
					}
				}
			  ?>
			</tbody>
		  </table>
			</div>
		</div>
	</div>
</html>
	