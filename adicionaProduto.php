<?php
    include("seguranca.php");
?>
<!DOCTYPE html>
<html>
    <head>
		
    </head>
    <body>
        <div class="container theme-showcase" role="main">
            <div class="page-header">
            <h1>Adicionar Produto</h1>
            </div>
            <div class="form-group has-error">
                <label class="control-label" id="mensagem"></label>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="principal.php?link=04">
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Codigo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="txtCodigo" id="codigo" required autocomplete="off">
                            </div>
                        </div>
						
						<div class="form-group">
							<label for="cel" class="col-sm-2 control-label">Produto:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtProd" >
							</div>
                         </div>
						
						<div class="form-group">
							<label for="nome_empresa" class="col-sm-2 control-label">Quantidade:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="txtQuant">
							</div>
							 <label for="email" class="col-sm-2 control-label">Valor:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="txtValor" >
                            </div>
						</div>
						 <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                   <input type="submit" value="Adicionar" class="btn btn-default">
                            </div>
							<div class="col-sm-offset-2 col-sm-10">
                                   <input type="submit" value="Cancelar" class="btn btn-default">
                            </div>
                        </div>
					  </form>
                </div>
        </body>
</html>