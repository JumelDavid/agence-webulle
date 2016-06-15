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

<?php require 'includes/login.php' ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Connexion
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-2"></div>
					 <div class="col-lg-8">
				  <h3>Se connecter:</h3>

				  <form name="connexion"  method="post">
					  <div class="col-lg-4">
					 <label class="label label-default"> Login</label>
					 <input type="text" class="form-control form1" name="pseudoUtilisateur">
				 </div>
				 <div class="col-lg-4">
					 <label class="label label-default"> Password</label>
					 <input type="password" class="form-control form1" name="mdpUtilisateur"></br>
				 </div>
				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="row">
			 	<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<button type="submit" name="connexion" class="btn btn-default btn-lg" role="button">Connexion</button>
				</form></div>
				  <div class="col-lg-2"></div>
				</div>
			</div>
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
</html>
