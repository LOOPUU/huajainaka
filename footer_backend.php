
    <!-- Required Js -->
    <script src="template_backend/js/vendor-all.min.js"></script>
    <script src="template_backend/js/plugins/bootstrap.min.js"></script>
    <script src="template_backend/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="template_backend/js/plugins/apexcharts.min.js"></script>

    <!-- custom-chart js -->
    <script src="template_backend/js/pages/dashboard-main.js"></script>

    <!-- script all -->
    <script src="backend/script/index.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

    <?php if(@$_GET['alert']=="success"){?>
        <script type="text/javascript">
            alert_success();
        </script>
    <?php }elseif(@$_GET['alert']=="error"){?>
        <script type="text/javascript">
            alert_error();
        </script>
    <?php } ?>
    <!-- loding -->
    <script type="text/javascript">
        
    </script>
    
</body>

</html>
