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
					<h2>Ajouter une prestation
					</h2>
				</section>

				<!-- Main content -->
				<section class="content">
					<form name="Ajout" action="ajouter_prestation.php" method="POST" enctype="multipart/form-data">
						<div class="row">
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

							<div class="col-lg-4">
								<label for="statutPrestation">Statut de la prestation</label>
								<select class="form-control" required name="statutPrestation"/>
									<option value="Projet à venir">Projet à venir</option>
									<option value="Projet en cours">Projet en cours</option>
									<option value="Projet terminé">Projet terminé</option>
								</select><br/>
							</div>
							<div class="col-lg-4">
									<label for="signatureContrat">Contrat signé</label><br/>
									<input  type="radio" value="1" name="signatureContrat"/> Oui
									<input style="margin-left:30px;" type="radio" value="0" checked name="signatureContrat"/> Non <br/>
								</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label for="typePrestation">Type de prestation</label>
								<input class="form-control" type="text" required name="typePrestation"/><br/>
							</div>
							<div class="col-lg-6">
								<label for="montantPrestation">Montant de la prestation</label>
								<input class="form-control" type="text" required name="montantPrestation"/><br/>
							</div>
						</div>
<br/>

						<div class="row">
							<div class="col-lg-12">
								<label for="commentairePrestation">Commentaires sur la Prestation</label>
								<textarea class="form-control"  name="commentairePrestation"/></textarea><br/>
							</div>
						</div>

					</br>
					<div id="nouveau_input"></div>
					<script type="text/javascript">
					var i = 1;
					var contenu = "";
					function modifier(increment) {
						i+=increment;
						document.getElementById('hidden').value=i-1;
					}
					function nouveauInput(){
						contenu = contenu + "<div class='row'><div class='col-lg-4'><h3>Paiement </h3></div></div><div class='row'><div class='col-lg-6'><label for='montantPaiement'>Montant du paiement </label><input class='form-control' type='text'  name='montantPaiement" +i+ "'/><br/></div><div class='col-lg-6'><label for='datePaiement '>Date du paiement </label><input class='form-control' type='date' name='datePaiement" +i+ "'/><br/></div></div><div class='row'><div class='col-lg-12'><label for='commentairePaiement'>Commentaires sur le paiement </label><textarea class='form-control'  name='commentairePaiement" +i+ "'/></textarea><br/></div></div>";
						document.getElementById('nouveau_input').innerHTML = contenu;
					}
					// document.write('<input id="hidden" type="hidden" name="hidden" value=0 /> ');
					</script>



					<div class="row">
						<div class="col-lg-10"></div>
						<div class="col-lg-2">
							<input type="button"  onclick="nouveauInput(); modifier(1);" value="Ajouter Paiement" class="btn btn-yellow"/>
						</div>
					</div></br>

					<div class="row">
						<div class="col-lg-11"></div>
						<div class="col-lg-1">
							<input type="hidden" id="hidden" name="hidden" value="1" size="3" readonly="true" style="background-color:#FFFFFF; border:#FFFFFF none 0px; text-align:center; font-size:30px">
							<input type="submit" name="Ajout" value="Ajout" class="btn btn-aqua"/>

					</div>
										<?php include ("includes/ajout_prestation.php"); ?>
				</div>
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
