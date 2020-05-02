<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<section class="section">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
    <h2 class="section-title">
               <span class="text-red">GET IN</span> TOUCH
              </h2>
              <div class="underline mr-auto ml-auto mb-2"></div>
              <p>Get in Touch With TRP Proficiency And Skills For Latest updates.</p>
    </div>
  </div>
     <div class="row">    
            <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29445.78165650425!2d88.37013964668847!3d22.701364297447853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89c0bf0119e61%3A0xf3dedf82eaf68307!2sSodepur%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1587747044989!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-4">
              <div class="card">
                 <div class="card-body">

                 
              
              <h4>Get In Touch</h4>
              <form action="userinfo.php" method="post">
              
      <div class="form-group">
    <label>Username</label>
    <input type="text" name="user"  autocomplete="off" class="form-control" placeholder="Username">  
    </div>
    <div class="form-group">
    <label>Email Id</label>
    <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Email Id">  
    </div>
    <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Mobile">  
    </div>
    <div class="form-group">
    <label>Subject</label>
    <input type="text" name="subject" autocomplete="off" class="form-control" placeholder="Subject">  
    </div>
    <div class="form-group">
    <label>Message</label>
    <textarea class="form-control">
    </textarea>  
    </div>
  
  <button type="submit" class="btn btn-success btn-block">Send Message</button>
</form>
</div>
</div>
            </div>
      </div>
    </div>
  </div>
</div>
</section>

<footer class="bg-dark">

<section class="section">
<div class="container">
<div class="row">
            
         <div class="col-md-3">
                    <img src="images/logo.jpg" class="w-25" alt="Logo">
                    <p class="text-white">
                        This is TRP Proficiency and Skills
                        <a href="aboutus.php">read more</a>
                    </p>
                    <div class="footer-social-media">
                      <i class="fa fa-facebook text-white mr-3"></i>
                      <i class="fa fa-twitter text-white mr-3"></i>
                      <i class="fa fa-instagram text-white mr-3"></i>
                      <i class="fa fa-youtube text-white mr-3"></i>
                      <i class="fa fa-linkedin text-white mr-3"></i>
                    </div>
            </div>

            <div class="col-md-3">
                <h4 class="text-white">Courses</h4>
                <div class="underline mb-2"></div>
                <div class="footer-link"><a href="aviation.php" class="text-white">Aviation Courses</a></div>
                <div class="footer-link"><a href="technical.php" class="text-white">Technical Courses</a></div>
                <div class="footer-link"><a href="banking.php" class="text-white">Banking Courses</a></div>
                <div class="footer-link"><a href="spokenenglish.php" class="text-white">Spoken English Courses</a></div>
            </div>

            <div class="col-md-3">
            <h4 class="text-white">Quick Links</h4>
                <div class="underline mb-2"></div>
                <div class="footer-link"><a href="home.php" class="text-white">Home</a></div>
                <div class="footer-link"><a href="aboutus.php" class="text-white">About Us</a></div>
                <div class="footer-link"><a href="courses.php" class="text-white">Courses</a></div>
                <div class="footer-link"><a href="galary.php" class="text-white">Galary</a></div>
                <div class="footer-link"><a href="contactus.php" class="text-white">Contact Us</a></div>
            </div>

            <div class="col-md-3">
            <h4 class="text-white">Contact Us</h4>
                <div class="underline mb-2"></div>
                <p class="text-white f-14">
                <i class="fa fa-map-marker"></i>
                Sodpur , kol-700113 , west bengal
                             , 24th pgs(N)
                        Sodpur , kol-700113 , west bengal
                        <a href="aboutus.php">read more</a>
                    </p>

                    <p class="text-white f-14">
                <i class="fa fa-phone"></i>
                +91 8583853327 , +91 9007011789
                     , whatsApp - +91 8336030860
                        <a href="tel:+918583853327" class="text-white">
                         (Call time 11am to 8pm)</a>
                    </p>

                    <p class="text-white f-14">
                <i class="fa fa-envelope"></i>
                        <a href="mailto:trpproficiency.info@gmail.com" class="text-white">trpquries@gmail.com</a>
                    </p>
                
            </div>
            
           
            
            
         </div>
         </div>
      </section>
       <section class="py-3 border-top">
          <div class="container">
             <div class="row">
                   <div class="col-md-12 text-center">
                      <p class="text-white f-14">
                          &copy; copyrights <?php echo date('Y') ?>. Reserved by TRP Proficiency and Skills.
                          Designed and Developes by TRP Proficiency and Skills.
                      </p>
                   </div>
             </div>
          </div>
       </section>
</footer>


</body>
</html>