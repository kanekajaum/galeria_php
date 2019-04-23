<section class="jumbotron ">

    <div class="container text-center">
	      <h1 class="jumbotron-heading">Concurso de foto de bolos</h1><br>
	      <p class="lead text-muted">Concurso um concursos de fotos culinarias com a especialidade em bolos, o premio da melhor foto será de 5000 reais.</p>
	     <br>
    </div>

    <fieldset class="border p-3 " >
		<h1 class="ml-2">Adicione um bolo</h1><hr><br>
		<form method="POST" enctype="multipart/form-data" class="form-group">

			Titulo: <br>
			<input type="text" name="titulo" class="form-control">
			Fotos:
			<input class="btn btn-default form-control" type="file" name="arquivo" ><br><br>
			<input class="btn btn-primary" type="submit" name="Enviar Arquivo">
		</form>
 	</fieldset>
		 
 	<br><br>
 		<div class="container">
 		
	 		<div class="row">
<?php  
foreach ($fotos as $foto): ?>
	 			<!-- -------------------------------------------------------------------------- -->
	 			<div class="col-md-4" >
	 				<div class="card m-3 shadow-sm " style=" ">
			            <img  src="assets/images/galeria/<?php echo $foto['url']; ?>"  border="0" style="margin:50;max-height:200px;">
			        <div class="card-body">
			              <p class="card-text"><?php echo utf8_encode($foto['titulo']); ?></p>
			        <div class="d-flex justify-content-between align-items-center">
			            <div class="btn-group">
			                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
			                  <button type="button" class="btn btn-sm btn-outline-primary">vote</button>
			            </div>
			                <small class="text-muted"></small>
			            </div>
			         </div>
			     	</div>
	 			</div>

<?php endforeach; ?>

	 			<!-- -------------------------------------------------------------------------- -->

 		</div>

 		



</section>