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
        
       

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3><?php echo $lang['CONTACTPAGE_FORMTITLE']?></h3>
          <p>><?php echo $lang['CONTACTPAGE_FORMTEXT']?></p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
              <div class="form-group col-lg-4">
                <label for="input1"><?php echo $lang['SEARCHCONTACT_NAME']?></label>
                <input type="text" name="contact_name" class="form-control" id="input1">
              </div>
              <div class="form-group col-lg-4">
                <label for="input2"><?php echo $lang['SEARCHCONTACT_EMAIL']?></label>
                <input type="email" name="contact_email" class="form-control" id="input2">
              </div>
              <div class="form-group col-lg-4">
                <label for="input3"><?php echo $lang['SEARCHCONTACT_TEL']?></label>
                <input type="phone" name="contact_phone" class="form-control" id="input3">
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label for="input4"><?php echo $lang['CONTACTPAGE_QUESTION']?></label>
                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Modern Business</h3>
          <h4>A Start Bootstrap Template</h4>
          <p>
            5555 44th Street N.<br>
            Bootstrapville, CA 32323<br>
          </p>
          <p><i class="icon-phone"></i> <abbr title="Phone">P</abbr>: (555) 984-3600</p>
          <p><i class="icon-envelope-alt"></i> <abbr title="Email">E</abbr>: <a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p>
          <p><i class="icon-time"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="icon-facebook-sign icon-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="icon-linkedin-sign icon-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="icon-twitter-sign icon-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="icon-google-plus-sign icon-2x"></i></a></li>
          </ul>
        </div>

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