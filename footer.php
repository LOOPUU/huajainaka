	</div>
	<!-- jQuery -->
	<script src="template/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="template/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="template/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="template/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="template/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="template/js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="template/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="template/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="template/js/main.js"></script>

	<!-- bootstrap  -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  	<!-- script all -->
    <script src="frontend/script/index.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

    <?php if(@$_GET['alert']=="success"){?>
        <script type="text/javascript">
            alert_success();
        </script>
    <?php }elseif(@$_GET['alert']=="success2"){?>
        <script type="text/javascript">
            alert_success2();
        </script>
    <?php }elseif(@$_GET['alert']=="error"){?>
        <script type="text/javascript">
            alert_error();
        </script>
    <?php } ?>


    <?php if(@$_GET['alert3']=="success"){?>
        <script type="text/javascript">
            alert_success3();
        </script>
    <?php }?>
	</body>
</html>

 <script type="text/javascript">
	$(document).ready(function() {
	  	$('#table').DataTable( {
		    responsive: true
		} );
	});

</script>
