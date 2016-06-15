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
			 Recherche <small>Trouver une société</small>
		  </h1>
	   </section>

	   <!-- Main content -->
	   <section class="content">

		  <!-- Small boxes (Stat box) -->
		  <div class="row">
			  <div class="col-lg-1"></div>
			  <div class="col-lg-10">
		  <form name="rechercher" method="post">
			 <input type="text" class="form-control" name="recherche"></br>
			 <button type="submit" name="search" class="btn btn-default btn-lg" role="button">Rechercher</button>
		  </form>
	  </div>
	  <div class="col-lg-1"></div></div>

		<?php
 if(isset($_POST['search']))
 {
	 if( !empty($_POST['recherche']))
	 {
		 $reponse = $connexion->query('SELECT * FROM societe s
			 LEFT OUTER JOIN representant r ON r.codeSociete_id = s.codeSociete
			 WHERE s.nomSociete LIKE "%' .$_POST["recherche"]. '%" OR r.nomRepresentant LIKE "%'.$_POST["recherche"].'%"
			 OR r.prenomRepresentant LIKE "%'.$_POST["recherche"].'%"');


	 while ($donnees = $reponse->fetch())
	 {
		 echo '
		 <div class="jumbotron">
			 <div class="container">
			<h4>Résultat de la recherche :</h4>
			 <div class="col-lg-12 recherche">
			 <div class="col-lg-9"><p>Société : [ '.htmlspecialchars($donnees["nomSociete"]).']</p></div></br>

			 <div class="col-lg-12"><p>Email: '.htmlspecialchars($donnees["emailSociete"]).'</br>
			 Téléphone: '.htmlspecialchars($donnees["telephoneSociete"]).'</br>
			 Adresse: '.htmlspecialchars($donnees["adresseSociete"]).'</br>
			 Logo: '.htmlspecialchars($donnees["logoSociete"]).'</br>
			 Logo: <a href=" '.htmlspecialchars($donnees["urlSociete"]).'" target="blank"> '.htmlspecialchars($donnees["urlSociete"]).' </a></p></div></br>

			 <div class="col-lg-12"><p>Commentaires: '.htmlspecialchars($donnees["commentaireSociete"]).'</p></div>

			  </div>
			 </div>
	  ';}

  }
  }
  ?>

</div>
</div>

	 </div>
	 <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>


		  <!-- Main row -->

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
