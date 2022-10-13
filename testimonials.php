<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Noah Manter" />
    <title>Shape Up!</title>
    <link rel="shortcut icon" href="drop.png" />

    <link rel="stylesheet" href="other.css" />
  </head>

  <body>
    <header>
      <a href="home"
        ><img src="images/shape_up_logo.png" alt="Shape Up logo"
      /></a>
      <div>
        <h1 class="main">Shape Up!</h1>
        <h2>Find the best fit for you</h2>
      </div>
    </header>
    <nav class="new">
      <ul>
        <li><a href="home.php" >Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="testimonials.html" style="color: black">testimonials</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        
        
        <li>
          Stress Relief
          <ul>
            <li><a href="">What is Stress?</a></li>
            <li><a href="">8 Helpful Tips</a></li>
            <li><a href="">Meditation</a></li>
            <li><a href="">Vipasana</a></li>
          </ul>
        </li>
        <li>Healthy Diets</li>
      </ul>
    </nav>
    
      <h1>Car wash reviews</h1>
      <section class="container">
        <div class="left-half">
          <article>
            <span>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
        <h3>Saul Goodman</h3>
        <h4>Ceo &amp; Founder</h4>
        <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
          </p>
        </span>
        <span>
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
        <h3>Saul Goodman</h3>
        <h4>Ceo &amp; Founder</h4>
        <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
          </p>
        </span>
          </article>
        </div>
        <div class="right-half">
            <article>
                <span>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              </p>
            </span>
            <span>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              </p>
            </span>
              </article>
        </div>
      </section>

      <aside>
      
        

          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
        <h3>Saul Goodman</h3>
        <h4>Ceo &amp; Founder</h4>
        <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
          </p>
        </aside>

        <section>
           
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
            </section>
       <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-6">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
       
            <div class="col-lg-6">
              <div class="testimonial-item mt-4 mt-lg-0">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="testimonial-item mt-4">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="testimonial-item mt-4">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="testimonial-item mt-4">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="testimonial-item mt-4">
                <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
                <h3>Emily Harison</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
      <!-- <section>
<h3>Get ready to Shape Up!</h3>
<p>How many times have you started a new workout routine or diet? And how many times has it failed to give
you the results you want? Now, with the help of this site, you can learn about the exercises and diet
that work best for you. We offer personalized programs as well as access to several health and dieting
tools. So don't wait! Get started looking and feeling better today.</p>
<p>As fitness expert Amanda Russell said:</p>
<blockquote>Fitness is about so much more than exercise. It’s a catalyst for positive change, and it affects
every aspect of your life.</blockquote>
<h3 style="padding-bottom: 0.5rem;">What we offer</h3>
<h4>Build strong muscles</h4>
<p>Tired of being tired? Strength training can help you manage or lose weight and increase your metabolism
to help you burn more calories. It can also increase bone density and reduce the risk of osteoporosis.
</p>
<h4>Get your heart rate up</h4>
<p>Want to lose weight? Cardiovascular exercise burns calories and improves overall health. It can reduce
belly fat, promote brain growth, prevent stress, and help you focus.</p>
<h4>Relax</h3>
<p>Stressed out? Stress can weaken the immune system and cause high blood pressure, fatigue, depression,
anxiety, and even heart disease. Learn ways to manage and reduce stress.</p>
<h4>Eat what's right for you</h4>
<p>Are you really what you eat? Lose weight, gain weight, or just feel great! Maintaining a healthy diet
is
probably the most important thing you can do to promote overall health.</p>
</section> -->
    </main>
    <footer>
      <p>&copy; 2022 Dustin Bobzin</p>
    </footer>
  </body>
</html>
