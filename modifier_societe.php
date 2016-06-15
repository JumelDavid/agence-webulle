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
			Modifier un societe
		  </h1>
	   </section>

	   <!-- Main content -->
	   <section class="content">

			<?php  $rep = $connexion->prepare('SELECT * FROM societe WHERE codeSociete = ?');
			                      $rep->execute(array($_GET['number']));
			                      while ($data = $rep->fetch())
			                     { ?>

											<div class="row">
										  	  <div class="col-lg-4">
										  	  <form name="Ajout" method="POST" enctype="multipart/form-data">
										  			<label for="nomSociete">Nom</label>
										  				 <input class="form-control" type="text"  name="nomSociete" value="<?php echo $data['nomSociete'];?>"/><br/>
										  	  </div>
										  	  <div class="col-lg-4">
										  			<label for="emailSociete">Email</label>
										  				 <input class="form-control" type="text" name="emailSociete" value="<?php echo $data['emailSociete'];?>"/><br/>
										  	  </div>
										  	  <div class="col-lg-4">
										  			<label for="telephoneSociete">Téléphone</label>
										  				 <input class="form-control" type="text" name="telephoneSociete" value="<?php echo $data['telephoneSociete'];?>"><br/>
										  	  </div>
										   </div>

										   <div class="row">
										  			 <div class="col-lg-4">
										  					<label for="adresseSociete">Adresse</label>
										  							<input class="form-control" type="email"  name="adresseSociete" value="<?php echo $data['adresseSociete'];?>"/><br/>
										  			 </div>
										  	  <div class="col-lg-4">
										  			<label for="logoSociete">Adresse du site web</label>
										  				 <input class="form-control" type="url" name="logoSociete" value="<?php echo $data['logoSociete'];?>"/><br/>
										  	  </div>
										  			  <div class="col-lg-4">
										  					<label for="urlSociete">Site</label>
										  							<input class="form-control" type="text" name="urlSociete" value="<?php echo $data['urlSociete'];?>"/><br/>
										  			 </div>
										   </div>

									   </br>
										  		<div class="row">
										  			<div class="col-lg-12">
										  				<label for="commentaireSociete">Commentaires</label>
										  				<textarea class="form-control"  name="commentaireSociete"/><?php echo $data['commentaireSociete'];?></textarea><br/>
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

										  <?php include('includes/modif_societe.php');?>

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
