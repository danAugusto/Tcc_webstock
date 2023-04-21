<?php
    include("seguranca.php");
?>
<!DOCTYPE html>
<html>
    <head>
		<style>
			div.menu{
					overflow: hidden;
					background-color: #0083FF;
					width: 100%;
				}
			div.menu a {
					float: left;
					display: block;
					color: #f2f2f2;
					text-align: center;
					padding: 30px 40px;
					text-decoration: none;
					font-size: 17px;
				}
			div.main {
					  padding: 10px;
					  height: 1000px;
					}
			h2{
				text-align: center;
				font-size: 35px;
				color: #FE2E64;
			}	
			p{
				color: black;
				font-size: 20px;
				float: left;
			}
			img.imgTec{
						width: 700px;
						height: 400px;
					}
			h1{
				text-align: left;
				font-size: 35px;
				color: #FFB619;
			}
			p.footer{
						color:   #0083FF;
						text-align: center;
					}
		</style>
    </head>
    <body>
        <div class="container theme-showcase" role="main">
            <div class="page-header">
            <h1>Cadastrar Administrador</h1>
            </div>
            <div class="form-group has-error">
                <label class="control-label" id="mensagem"></label>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="principal.php?link=04">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="txtNome" id="nome" placeholder="Nome Completo" required autocomplete="off">
                            </div>
                        </div>
						
						<div class="form-group">
							<label for="cel" class="col-sm-2 control-label">Celular:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="cel" id="celular" placeholder="Celular" required autocomplete="off">
							</div>
							<label for="data" class="col-sm-2 control-label">Data de Nascimento</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="txtData" placeholder="DD/MM/AAAA" required>
                            </div>  
                         </div>
						
						<div class="form-group">
							<label for="nome_empresa" class="col-sm-2 control-label">Nome da Empresa:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtEmpresa" id="nome_empresa" placeholder="Nome Empresa" required autocomplete="off">
							</div>
							 <label for="email" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="txtEmail" placeholder="E-mail" required>
                            </div>
						</div>
						 <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                   <input type="submit" value="Cadastrar" class="btn btn-default">
                            </div>
							<div class="col-sm-offset-2 col-sm-10">
                                   <input type="submit" value="Cancelar" class="btn btn-default">
                            </div>
                        </div>
					  </form>
                </div>
        </body>
</html>