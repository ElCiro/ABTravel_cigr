<!--=====================================
MENU
======================================-->

<div class="container-fluid menu">

	<a href="#" class="btnClose">X</a>

	<ul class="nav flex-column text-center">
		<?php foreach($categorias_cigr as $key=>$value): ?>

		<li class="nav-item">

			<a class="nav-link text-white" href="<?php echo $value["ruta_categoria"]; ?>"><?php 
			echo $value["descripcion_categoria"]; ?></a>

		</li>
		<?php endforeach ?>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Mi viaje por Centroamérica</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Mi viaje por Norteamérica</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Mi viaje por Europa</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Mi viaje por Asia</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Mi viaje por Africa</a>

		</li>

		<li class="nav-item">

			<a class="nav-link text-white" href="categorias.html">Mi viaje por Oceanía</a>

		</li>

	</ul>

</div>