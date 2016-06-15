<?php require "includes/head.php" ?>
<body class="hold-transition skin-blue sidebar-mini">
<?php
if(isset($_SESSION['pseudoUtilisateur'])){
    ?>

	 <div class="wrapper">

		 <?php
		 include_once('includes/navbar.php');
		 ?>

	 <div class="content-wrapper">
	   <!-- Content Header (Page header) -->
	   <section class="content-header">
		  <h1>
			Modifier un représentant
		  </h1>
	   </section>

	   <!-- Main content -->
	   <section class="content">

			<?php  $rep = $connexion->prepare('SELECT * FROM representant WHERE codeRepresentant = ?');
			                      $rep->execute(array($_GET['number']));
			                      while ($data = $rep->fetch())
			                     { ?>

											<div class="row">
										  	  <div class="col-lg-4">
										  	  <form name="Ajout" method="POST" enctype="multipart/form-data">
										  			<label for="nomRepresentant">Nom</label>
										  				 <input class="form-control" type="text"  name="nomRepresentant" value="<?php echo $data['nomRepresentant'];?>"/><br/>
										  	  </div>
										  	  <div class="col-lg-4">
										  			<label for="prenomRepresentant">Prénom</label>
										  				 <input class="form-control" type="text" name="prenomRepresentant" value="<?php echo $data['prenomRepresentant'];?>"/><br/>
										  	  </div>
										  	  <div class="col-lg-4">
										  			<label for="emailRepresentant">Email</label>
										  				 <input class="form-control" type="text" name="emailRepresentant" value="<?php echo $data['emailRepresentant'];?>"><br/>
										  	  </div>
										   </div>

										   <div class="row">
										  			 <div class="col-lg-4">
										  					<label for="telephoneRepresentant">Téléphone</label>
										  							<input class="form-control" type="email"  name="telephoneRepresentant" value="<?php echo $data['telephoneRepresentant'];?>"/><br/>
										  			 </div>
										  	  <div class="col-lg-4">
										  			<label for="statutRepresentant">Statut</label>
										  				 <input class="form-control" type="url" name="statutRepresentant" value="<?php echo $data['statutRepresentant'];?>"/><br/>
										  	  </div>
											  <div class="col-lg-4">
												  <label for="codeSociete">Société</label><br/>
												  <select name="codeSociete" class="form-control">
												  <?php
												  $reponse = $connexion->query("SELECT * FROM societe");
												  while ($donnees = $reponse->fetch())
												  {
													  echo '
													  <option value=" ' . htmlspecialchars($donnees["codeSociete"]) . ' "> ' . htmlspecialchars($donnees["nomSociete"]) . ' </option>';
													   }
													  ?>
													  </select>
											  </div>
										   </div>

									   </br>
										  		<div class="row">
										  			<div class="col-lg-12">
										  				<label for="commentaireRepresentant">Commentaires</label>
										  				<textarea class="form-control"  name="commentaireRepresentant"/><?php echo $data['commentaireRepresentant'];?></textarea><br/>
										  			</div>
										  		</div>

										  		  <!-- <div class="col-lg-4">
										  			<label for="PJ_One">Pièces jointes</label>
										  				 <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="">
										  			</div>-->
										  			 <?php echo '<input type="hidden" value="' . $_GET['number'] . '" name="number_hidden">';?>
										  		<div class="row">
										  			 <div class="col-lg-11"></div>
										  			 <div class="col-lg-1">
										  				  <input type="submit" name="ajout" value="ajout" class="btn btn-primary"/>
										  				  </form>

										  				  <?php } ?>
										  			 </div>
										  		</div>

										  <?php include('includes/modif_representant.php');?>

		   <!-- /.row -->

		  </div>
		  <!-- /.container-fluid -->

		  </div>
		  <!-- /#page-wrapper -->

		  </div>
	  </aside><!-- /.control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
		  immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
	</div><!-- ./wrapper -->

	<!-- jQuery 2.1.4 -->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.5 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="plugins/morris/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/knob/jquery.knob.js"></script>
	<!-- daterangepicker -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
	<script src="plugins/daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
 </body>
 </html><?php } ?>
