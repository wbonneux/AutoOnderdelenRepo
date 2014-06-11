<?php
include_once '_/components/php/common.php';
include_once '_/components/php/header.inc.php';
?>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><?php echo $lang['CONTACTPAGE_TITLE']?> <small><?php echo $lang['CONTACTPAGE_SUBTITLE']?></small></h1>
<!--           <ol class="breadcrumb"> -->
<!--             <li><a href="index.html">Home</a></li> -->
<!--             <li class="active">Contact</li> -->
<!--           </ol> -->
        </div>
       </div>
        <?php 
        if (isset($_POST['save'])) {
        	include('_/components/php/contactUs.check.form.php');
        	
        }
        include('_/components/php/contactUs.form.php');
        ?>
       

      </div><!-- /.row -->
      
     
      <div class="row">
      	 <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iùframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>
      </div>

    </div><!-- /.container -->

<?php
include_once '_/components/php/footer.inc.php';
?>
    ml>