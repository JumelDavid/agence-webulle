<?php require "includes/head.php" ?>
<?php if (isset($_SESSION['pseudoUtilisateur'])) { echo  '<SCRIPT LANGUAGE="JavaScript">document.location.href="tableau_de_bord.php"</SCRIPT>'; }?>

  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

		 <header class="main-header">
		   <!-- Logo -->
		   <a href="index.php" class="logo">
		 	 <!-- mini logo for sidebar mini 50x50 pixels -->
		 	 <span class="logo-mini"><b>W</b></span>
		 	 <!-- logo for regular state and mobile devices -->
		 	 <span class="logo-lg"><b>Webulle</b></span>
		   </a>
		   <!-- Header Navbar: style can be found in header.less -->
		   <nav class="navbar navbar-static-top" role="navigation">
		 	 <!-- Sidebar toggle button-->
		 	 <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		 		<span class="sr-only">Toggle navigation</span>
		 	 </a>
		 	 <div class="navbar-custom-menu">
		 		<ul class="nav navbar-nav">



		 		  <!-- Control Sidebar Toggle Button -->

		 		</ul>
		 	 </div>
		   </nav>
		 </header>

		 <section id="index" class="emerald" style="height: 100vh !important; text-align: center; margin: auto;">
		 		<div class="container" style="text-align: center; margin: auto;">
		 			<div class="row" style="text-align: center; margin: auto; height: 30vh;">
		 				<div class="col-lg-12" style="text-align: center; margin: auto;">
		 					<h1 style="color:white;">SITUATION PROFESSIONNELLE: AGENCE WEBULLE</h1>
		 				</div>
		 			</div>
		 			<div class="row" style="text-align: center; margin: auto;">
		 				<div class="col-lg-12" style="text-align: center; margin: auto;">
		 					<div class="col-lg-4">
		 						<button class="btn btn-default"><a href="documentation/DossierPPE-AgenceWebulle.pdf" target="blank">DOSSIER DE PRESENTATION</a></button>
		 					</div>
		 						<div class="col-lg-4">
		 							<button class="btn btn-default"><a href="https://github.com/JumelDavid/agence-webulle" target="blank">ACCES AU CODE SOURCE</a></button>
		 						</div>
		 						<div class="col-lg-4">
		 							<button class="btn btn-default"><a href="connexion.php" target="blank">ACCES AU SITE INTERNET</a></button>
		 						</div>
		 					</div>
		 				</div>
		 			</div>
		 		</section>

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
</html>
