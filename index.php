<?php
session_start();
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR."Common.php");

$post = array();
$post = $_POST;

if(!empty($post['mode']) && ($post['mode'] == 'submit'))
{
  if(sendMail($post))
  {
    $_SESSION['message'] = 'Your request has been submitted and we will be reaching out to you very shortly.';
  }
  header("Location: thanks.php");
}

?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width">
<title>WEIGHT LOSS - Index Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script type="">
jQuery(function($){
   $("#phone").mask("(999) 999-9999");
});
</script>
</head>

<body>
<div class="content-wrapper">
  <section id="content">
  <section class="top">
<div class="wrap-content zerogrid">
  <div class="top-inside">
<div class="top-left">
          <div class="top-left-box">
            <a href="#" style="text-decoration: none;"><h4 class="styleFontface">Weight Loss</h4></a>
          </div>
          <div class="top-middle-box">Look Great &amp; Feel Healthy</div>
        </div>
  <div class="top-right">
 <h5 class="styleFontface">Safely lose up to a pound a day</h5>
          </div>
</div>
</div>
<div class="clear"></div>
</section>
<section id="welcome">
<div class="wrap-content zerogrid">
  <div class="welcome-inside">
    <div class="welcome-left"><h1 class="styleFontface">Get the life you want and</h1>
            <h2 class="styleFontface">The body you deserve</h2>
         <h3 class="styleFontface"> With our all-inclusive weight loss adventure</h3></div>
    <div class="form-box">
            <div class="form-title">
              <h2 class="styleFontface">CONTACT US NOW</h2>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</div>
            <div class="form-inside">
              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="frmFirst" name="frmFirst" tabindex="1" required >
                <input type="hidden" name="mode" value="submit">
                <input name="first_name" type="text" class="input-box" id="first_name" placeholder="FIRST NAME" tabindex="2" required/>
                <br />
                <input name="last_name" type="text" class="input-box" id="last_name" placeholder="LAST NAME" tabindex="3" required />
                <br />
                <input name="email" type="email" class="input-box" id="email" placeholder="Email" tabindex="4" required />
                <br />
                <input name="phone" type="tel" class="input-box" id="phone" placeholder="Phone" tabindex="5" required />
                <br />
                <textarea name="message" cols="45" rows="5" class="comment" id="message" placeholder="Comment" tabindex="6" required></textarea><br />
                <input type="submit" value="SEND A MESSAGE" tabindex="7" class="button" >
                
              </form>
            </div>
          </div>
</div>
</div>
<div class="clear"></div>
</section>
<div class="clear"></div>
<div class="services-box">
<div class="wrap-content zerogrid">
<div class="content-title">
          <h2 class="styleFontface">Lose Weight effectively &amp; Safely</h2>
          <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
        <div class="services">
        <ul>
        <li><img src="images/services-icon-01.jpg" alt="" />
        <h2 class="styleFontface">Healthy DIET PLANS</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
        </li>
        <li><img src="images/services-icon-02.jpg" alt="" />
        <h2 class="styleFontface">Healthy DIET PLANS</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
        </li>
       <li style="margin-right:0%;"><img src="images/services-icon-03.jpg" alt="" />
        <h2 class="styleFontface">Healthy DIET PLANS</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
        </li>
        </ul>
        </div>
</div>
</div>
<div class="clear"></div>
<div class="content-box">
     <div class="wrap-content zerogrid">
        <div class="content-inside">
          <div class="content-left"><img src="images/weight-loss-bg-01.jpg" alt="" /></div>
          <div class="content-right">
            <h3 class="styleFontface">You have nothing to lose
              but your extra weight</h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
              which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
               <a href="#" title="SEND A MESSAGE" class="button2">SEND A MESSAGE</a>
          </div>
        </div>
      </div>
    </div>
<div class="clear"></div>
<div class="services-box">
      <div class="wrap-content zerogrid">
        <div class="content-title">
          <h2 class="styleFontface">Featured Articles</h2>
          <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
        <div class="services">
        <ul>
        <li><img src="images/featured-bg-01.jpg" alt="" />
        <h2 class="styleFontface">Lorem Ipsum Dolor Sit</h2>
        <p>There are many variations of passag of Lorem Ipsum available, but the majority have suffered.</p>
        </li>
        <li><img src="images/featured-bg-02.jpg" alt="" />
        <h2 class="styleFontface">Lorem Ipsum Dolor Sit</h2>
        <p>There are many variations of passag of Lorem Ipsum available, but the majority have suffered.</p>
        </li>
        <li style="margin-right:0px;"><img src="images/featured-bg-03.jpg" alt="" />
        <h2 class="styleFontface">Lorem Ipsum Dolor Sit</h2>
        <p>There are many variations of passag of Lorem Ipsum available, but the majority have suffered.</p>
        </li>
        </ul>
        </div>
      </div>
    </div>
<div class="clear"></div>
<div class="content-box">
      <div class="wrap-content zerogrid">
        <div class="content-inside">
        <div class="content-middle-right"><img src="images/weight-loss-bg-02.jpg" width="500" height="500" alt="" /></div>
          <div class="content-middle-left">
            <h3 class="styleFontface">You have nothing to lose
              but your extra weight</h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words 
              which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
              <a href="#" title="SEND A MESSAGE" class="button2">SEND A MESSAGE</a>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="testimonial-box">
      <div class="wrap-content zerogrid">
        <div class="testimonial-inside"><img src="images/colon-bg.jpg" alt="" />
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
           printer took a galley of type and scrambled.</p>
          <strong style="color: #007dbd;">JOHN &amp; SARAH
        </strong></div>
      </div>
    </div>
    <div class="clear"></div>
  </section>
  <div class="clear"></div>
  <footer>
<div class="wrap-footer zerogrid">
  <div class="footer-main-box">Copyright <?php echo date("Y"); ?> © <a href="#">domainname.com</a>
    . All Rights Reserved  |  Designed by: <a href="https://www.buylandingpagedesign.com/" target="_blank">buylandingpagedesign.com</a></div>
</div>
  <div class="clear"></div>
</footer>
</div>

</body></html>