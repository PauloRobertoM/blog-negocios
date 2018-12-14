<?php include 'components/header.php'; ?>

	<section class="interna">
		<div class="titulo-topo">
	        <div class="container">
	            <h1>Fale Conosco</h1>

	            <ol class="breadcrumb">
	                <li><a href="#">Home</a></li>
	                <li class="active">Fale Conosco</li>
	            </ol>
	            <div class="borda"></div>
	        </div><!-- .container -->
	    </div><!-- .topo -->

	    <div class="revista fale-conosco">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-8 col-sm-8">
			    		<form>
		    				<input type="text" name="nome" id="nome" class="form-control" placeholder="seu nome" value="" />

			    			<div class="row">
			    				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		    						<input type="text" name="email" id="email" class="form-control" placeholder="e-mail" value="" />
			    				</div><!-- .md-6 -->
			    				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		    						<input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone" value="" />
			    				</div><!-- .md-6 -->
			    			</div><!-- .row -->

			    			<input type="text" name="assunto" id="assunto" class="form-control" placeholder="assunto" value="" />

		    				<textarea name="mensagem" id="mensagem" class="form-control" placeholder="mensagem"></textarea>

			    			<button>enviar</button>
			    		</form>
			    	</div><!-- md-8 -->
			    	<div class="col-md-4 col-sm-4">
			    		<img src="assets/images/revista.jpg" alt="">
			    	</div><!-- md-4 -->
			    </div><!-- row -->
	    	</div><!-- container -->
	    </div><!-- revista -->
	</section><!-- interna -->

<?php include 'components/footer.php'; ?>