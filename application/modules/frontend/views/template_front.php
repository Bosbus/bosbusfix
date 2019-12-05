<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<!-- AJAX JS -->

<script>
    var base_url = '<?php echo base_url();?>';
</script>
<!--JQuery-->
      <script src="<?php echo base_url(); ?>assets/plugins/jquery-3.1.1.min.js" type="text/javascript"></script>
<!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/frontend.css" rel="stylesheet">
<!-- End AJAX JS -->
<!DOCTYPE html>
<html lang="en">
<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic Frontend (with Top Bar)</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo base_url() ; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/plugins/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url() ; ?>assets/pages/css/animate.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url() ; ?>assets/pages/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/pages/css/slider.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/corporate/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url() ; ?>assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url() ; ?>assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->
<body>
<?php
$this->load->view('part_frontend/header');
?>

  
  

  <!-- Page Content -->
   <?php
      
      // $this->load->view('part_frontend/navigation');
      $this->load->view($main_view);
      $this->load->view('part_frontend/footer.php');      
      ?>

  

  <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="<?php echo base_url(); ?>assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.js" type="text/javascript"></script>      
    <script src="<?php echo base_url(); ?>assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo base_url(); ?>assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <script src="<?php echo base_url(); ?>assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling(); 

            var defaultDate = new Date(); // = today
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                startDate: defaultDate,
                autoclose: true,
            });
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

</body>

</html>
