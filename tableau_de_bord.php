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
			 Vue d'ensemble
		  </h1>
	   </section>

	   <!-- Main content -->
	   <section class="content">

		  <!-- Small boxes (Stat box) -->
		  <div class="row">
			 <div class="col-lg-4 col-xs-4">
				<!-- small box -->
				<div class="small-box bg-yellow">
				  <div class="inner">
					 <h3> <?php

										  $reponse = $connexion->query("SELECT COUNT(s.codeSociete)
										  FROM societe s
										  LEFT OUTER JOIN prestation p ON s.codeSociete = p.codeSociete_id
										  WHERE statutPrestation = 'Projet à venir' ");
										  $donnees = $reponse->fetch();
										  echo $donnees[0];
										 ?>
									 </h3>
					 <p>Projets à venir</p>
				  </div>
				  <div class="icon">
					 <i class="ion-ios-list-outline"></i>
				  </div>
				  <a href="projets_a_venir.php" class="small-box-footer">En savoir plus <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			 </div><!-- ./col -->
			 <div class="col-lg-4 col-xs-4">
				<!-- small box -->
				<div class="small-box bg-aqua">
				  <div class="inner">
					 <h3> <?php

					 $reponse = $connexion->query("SELECT COUNT(s.codeSociete)
					 FROM societe s
					 LEFT OUTER JOIN prestation p ON s.codeSociete = p.codeSociete_id
					 WHERE statutPrestation = 'Projet en cours' ");
					 $donnees = $reponse->fetch();
					 echo $donnees[0];
										 ?></h3>
					 <p>Projets en cours</p>
				  </div>
				  <div class="icon">
					 <i class="ion-android-laptop"></i>
				  </div>
				  <a href="projets_en_cours.php" class="small-box-footer">En savoir plus <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			 </div><!-- ./col -->
			 <div class="col-lg-4 col-xs-4">
				<!-- small box -->
				<div class="small-box bg-green">
				  <div class="inner">
					 <h3> <?php

					 $reponse = $connexion->query("SELECT COUNT(s.codeSociete)
					 FROM societe s
					 LEFT OUTER JOIN prestation p ON s.codeSociete = p.codeSociete_id
					 WHERE statutPrestation = 'Projet terminé' ");
					 $donnees = $reponse->fetch();
					 echo $donnees[0];
										 ?></h3>
					 <p>ProjetsTerminés</p>
				  </div>
				  <div class="icon">
					 <i class="ion-thumbsup"></i>
				  </div>
				  <a href="projets_termines.php" class="small-box-footer">En savoir plus <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			 </div><!-- ./col -->
		  </div><!-- /.row -->

		  <div class="row">
				<div class="col-lg-12">
				 <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=500&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=francoispinturault%40gmail.com&amp;color=%23865A5A&amp;ctz=Europe%2FParis" style="border:solid 1px #777" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
						  </div>
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
