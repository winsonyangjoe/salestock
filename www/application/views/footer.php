<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/jquery-1.11.2.min.js'); ?>"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/materialize.js'); ?>"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
    

    <!-- sparkline --> 
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/sparkline/sparkline-script.js'); ?>"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/jvectormap/vectormap-script.js'); ?>"></script>    

    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins.js'); ?>"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo site_url('assets/js/custom-script.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo site_url('assets/js/plugins/formatter/jquery.formatter.min.js'); ?>"></script>    
    <script type="text/javascript">
        $('#date-demo1').formatter({
            'pattern': '{{9999}}-{{99}}-{{99}}',
        });
        $('#date-demo2').formatter({
            'pattern': '{{9999}}-{{99}}-{{99}}',
        });
    </script>
</body>

</html>