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
			Modifier une prestation
		  </h1>
	   </section>

	   <!-- Main content -->
	   <section class="content">

			<?php  $rep = $connexion->prepare('SELECT * FROM prestation WHERE codeSociete_id = ?');
			                      $rep->execute(array($_GET['number']));
			                      $data = $rep->fetch();
			                      $rep2 = $connexion->prepare('SELECT nomSociete FROM societe WHERE codeSociete = ?');
			                      $rep2->execute(array($_GET['number']));
			                      $data2 = $rep2->fetch();?>
			                <div class="row">
			          <form name="Ajout" method="POST">
			                    <div class="col-lg-3">
			                        <label for="PremierD">Date du versement n°1</label>
			                            <input class="form-control" type="Date" name="Premier" value="<?php echo $data['Premier'];?>"/><br/>
			                    </div>
			                    <div class="col-lg-3">
			                        <label for="Premier">Premier versement</label>
			                            <input class="form-control" type="text"  name="Premier_somme" value="<?php echo $data['Premier_somme'];?>"/><br/>
			                    </div>
			                    <div class="col-lg-3">
			                      <label for="DeuxiemeD">Date du versement n°2</label>
			                            <input class="form-control" type="Date" name="Deuxieme" value="<?php echo $data['Deuxieme'];?>"/><br/>
			                    </div>
			                    <div class="col-lg-3">
			                        <label for="Deuxieme">Deuxième versement</label>
			                            <input class="form-control" type="text" name="Deuxieme_somme" value="<?php echo $data['Deuxieme_somme'];?>"><br/>
			                    </div>
			                </div>

			                <div class="row">
			                    <div class="col-lg-3">
			                       <label for="TroisiemeD">Date du versement n°3</label>
			                            <input class="form-control" type="date" name="Troisieme" value="<?php echo $data['Troisieme'];?>"/><br/>
			                    </div>
			                    <div class="col-lg-3">
			                        <label for="Troisieme">Troisième versement</label>
			                            <input class="form-control" type="text" name="Troisieme_somme" value="<?php echo $data['Troisieme_somme'];?>"/><br/>
			                    </div>
			                    <div class="col-lg-3">
			             <label for="Total">TOTAL A PAYER</label>
			              <input class="form-control" type="text" name="TOTAL" value="<?php echo $data['TOTAL'];?>"/><br/>
			            </div>
			                    <div class="col-lg-3">
			                       <label for="Client">Client</label>
			                            <input class="form-control" type="text" name="Client" value="<?php echo $data2['Nom'];?>" disabled/><br/>
			                    </div>
			                </div>
			           <div class="row">
			             <div class="col-lg-9"></div>
			             <div class="col-lg-3">
			                            <?php echo '<input type="hidden" value="' . $_GET['number'] . '" name="number_hidden">';?>
			               <input type="submit" name="Ajout" value="Ajout" class="btn btn-primary"/>
			               </form>
			             </div>
			           </div>

			           <?php include ("includes/modif-presta.php") ?>

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
