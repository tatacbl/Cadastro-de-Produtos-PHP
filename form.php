<?php 
	$id = 0;
	if(isset($_GET["id"])){ // testa se o id do produto foi passado via url
		$title = "Editar";
	} else{
		$title = "Novo";
	}
	require_once("cabecalho.php");
?>
<h1>Cadastro de Produto</h1>
<div class="col-md-6">
	<form class="form" action="salvar-produto.php" method="post">
		<input type="hidden" value="<?=$id; ?>"> 
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" />
		</div>
		<div class="form-group">
			<label>Preço</label>
			<input type="number" name="preco" class="form-control" />
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input type="file"  name="image" class="form-control" />
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<textarea name="descricao" class="form-control"></textarea>
		</div>
		<input type="reset" class="btn btn-danger" value="Cancelar" />
		<input type="submit" class="btn btn-primary" value="Salvar" />
	</form>

</div>
<?php require_once("rodape.php") ?>