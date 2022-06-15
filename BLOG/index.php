<?php

include ('nav.php');
?>
	<!--Carrosel de imagens-->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="image/nightwing2.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="image/spider.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="image/xmen2.jpg" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>

	<!--CARDS-->
	<main>
		<div class="container-cards">
			<h2 id="news">Novidades</h2>

			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
			    <div class="card">
			      <img src="image/games.jpg" class="card-img-top" alt="pinterest games">
			      <div class="card-body">
			        <h5 class="card-title">Games</h5>
			        <p class="card-text">Confira os lançamentos, reacts e reviews dos jogos mais aguardados do ano.</p>
			      </div>
			    </div>
	  		</div>
	  <div class="col">
	    <div class="card">
	      <img src="image/lotr.jpg" class="card-img-top" alt="lord of the rings sauron olho">
	      <div class="card-body">
	        <h5 class="card-title">Senhor dos Anéis</h5>
	        <p class="card-text">Veja os posters mais irados feitos por fãs.</p>
	      </div>
	    </div>
	  </div>
	  <div class="col">
	    <div class="card">
	      <img src="image/ucm.jpg" class="card-img-top" alt="ultimato poster">
	      <div class="card-body">
	        <h5 class="card-title">Ultimato</h5>
	        <p class="card-text">Melhor filme da Marvel? Opnião.</p>
	      </div>
	    </div>
	  </div>
	  <div class="col">
	    <div class="card">
	      <img src="image/liga-justica.jpg" class="card-img-top" alt="uma página liga da justiça">
	      <div class="card-body">
	        <h5 class="card-title">Liga da Justiça</h5>
	        <p class="card-text">Nova HQ revelará segredo obscuro da Liga.</p>
	      </div>
	    </div>
	  </div>
		</div>
		</div>
	</main>

<?php
include ('footer.php');
?>

</body>
</html>
