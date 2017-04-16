<!DOCTYPE html>
<html lang="en">
<?php include_once 'header.php' ?>

<main>
<br>
<div class="row">
	<div class="col-lg-6 offset-lg-3">
				
		<!--Form with header-->
		<div class="card">
		    <div class="card-block">

		        <!--Header-->
		        <div class="form-header green-gradient">
		            <h3><i class="fa fa-shopping-bag"></i> Cadastrar produto:</h3>
		        </div>

		        <!--Body-->
		        <div class="md-form">
		            <i class="fa fa-shopping-bag prefix"></i>
		            <input type="text" id="nome" class="form-control">
		            <label for="nome">Nome</label>
		        </div>

				<div class="md-form">
				    <i class="fa fa-pencil prefix"></i>
				    <textarea type="text" id="descricao" class="md-textarea"></textarea>
				    <label for="descricao">Descrição</label>
				</div>

		        <div class="md-form">
			        <div class="file-field">			        	
				         <i class="fa fa-instagram prefix"></i>
				         <input type="file">
				         <input class="file-path" type="text" placeholder="Photo">
				    </div>
			    </div>


		        <div class="md-form">
		            <i class="fa fa-money prefix"></i>
		            <input type="text" id="preco" class="form-control">
		            <label for="preco">Preço</label>
		        </div>

		        <div class="md-form">
		            <i class="fa fa-calculator prefix"></i>
		            <input type="text" id="quantidade" class="form-control">
		            <label for="quantidade	">Quantidade</label>
		        </div>

		        <div class="text-center offset-lg-5">
		            <button class="btn btn-dark-green">Cadastrar</button>
		        </div>

		    </div>
		</div>
		<!--/Form with header-->

	</div>
</div>
</main>

<?php include_once 'footer.php'?>