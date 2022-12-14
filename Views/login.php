<!DOCTYPE html>
<html>
<head>
<title>Fashion Club-Login</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/layout.css" type="text/css">
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin-left: 50%;
	
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .button {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 160px;;
  border: 0;
  padding: 10px;
  color:steelblue;
  font-size: 25px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: steelblue;
  text-decoration: none;
}
</style>
<script type="text/javascript">
	function start(){
		var current = new Date();
		document.getElementById("strings").innerHTML="<p style=\"color:red;text-align:right;font-size:15px;\">Date : "+current.toString()+"</p>";
			}
	window.addEventListener("load",start,false);
	</script>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="home.php">Fashion Club</a></h1>
      <h2>The joy of dressing is an Art!</h2><br>
      
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <!-- <li><a href="about.php">About</a></li>
        <li class="last"><a href="contact.php">Contact</a></li> -->
      </ul>
     
    </nav>
  </header>
  
</div>
<!-- content -->
<div class="wrapper row2">
   <p><section id="strings"></section></p>
  <div id="container" class="clear" style="background: url(images/Spring-Summer-Fashion.jpg) no-repeat ;">
   
    <!-- Slider -->
    <div class="login-page">
  <div class="form">
    <form class="login-form" action="../loginUser.php" method="post">
      <input type="text" placeholder="Enter your username" name="username" required />
      <input type="password"  placeholder=" Enter your Password" name="password" required/>
      <input type="submit" value="Login" class="button">
      <p class="message">Not a member? <a href="register.php">Register</a></p>
    </form>
  </div>
</div>
    <!-- main content -->
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">
        <article class="one_third">
          <figure><img src="images/fashion_2014.jpg" width="350" height="380" alt="">
            <figcaption>
              <h2>Fashion Camp,Bradley University-2017 </h2>
              <p>"Fashion is what you're offered four times a year by designers. And style is what you choose." </p>
              <footer class="more"><a href="login.php">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img src="images/fashion_2016.jpg" width="350" height="380" alt="">
            <figcaption>
              <h2>Summer Fashion-Paris, 2017 </h2>
              <p>"How can you live the high life if you do not wear the high heels?"</p>
              <footer class="more"><a href="login.html">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/fashion_men1.jpg" width="350" height="380" alt="">
            <figcaption>
              <h2>Men Fashion Show- 2012</h2>
              <p>"Walk like you have three men walking behind you"-Summer Fashion Camp 2017.</p>
              <footer class="more"><a href="login.php">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      <section id="intro" class="last clear">
        <article>
          <figure><img src="images/fashion_men2.jpg" width="450" height="450" alt="">
            <figcaption>
              <h2>Fashion Club- We are..</h2>
              <p>Fashion Club welcomes you with warm greetings. The purpose of this club is to help students pursue their fashion interests and bring fashion design to the P-CEP community.  The club is open to all students interested in fashion design or any aspect of the fashion industry.</p><p>The club plans one major fashion show each year around the theme of Prom.  Other activities include guest speakers, a field trip to fashion shows and/or other fashion related events, homecoming golf cart, recycle fashion show and photo shoots.</p>
              <footer class="more"><a href="login.php">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Introduction -->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear">
  <div id="media">
<h2 class="title">Connect with Us</h2>
      <nav>
        <ul>
          <li><a href="https://www.facebook.com"><img src="images/icons/facebook.png" width="32" height="32" alt=""/></a></li>
          <li><a href="https://www.instagram.com"><img src="images/icons/instagram.png" width="32" height="32" alt=""/></a></li>
          <li><a href="https://www.twitter.com"><img src="images/icons/twitter.png" width="32" height="32" alt=""/></a></li>
          <li><a href="https://www.googleplus.com"><img src="images/icons/google-plus.png" width="32" height="32" alt=""/></a></li>
        </ul>
      </nav>
      </div>
      <br><br><br><br>
    <!-- Section One -->
    <section class="one_quarter">
      <h2 class="title">For Education</h2>
      <nav>
        <ul>
          <li><a href="http://www.bradley.edu/">Fashion and Education</a></li>
          <li><a href="http://www.bradley.edu/">Designing Tutorial</a></li>
          <li><a href="http://www.bradley.edu/">Shop for College</a></li>
          <li><a href="http://www.bradley.edu/">Accessories</a></li>
        </ul>
      </nav>
    </section>
    <!-- Section Two -->
    <section class="one_quarter">
      <h2 class="title">See Our Fashion Collection</h2>
      <nav>
        <ul>
          <li><a href="https://www.amazon.com/"><img src="images/icons/amazon.png" width="32" height="16" alt=""/></a></li>
          <li><a href="https://www.ebay.com/"><img src="images/icons/ebay.png" width="32" height="16" alt=""/></a></li>
          <li><a href="https://www.foursquare.com/"><img src="images/icons/foursquare.png" width="32" height="16" alt=""/></a></li>
          <li><a href="https://www.pinterest.com/"><img src="images/icons/pinterest.png" width="32" height="16" alt=""/></a></li>
          
        </ul>
      </nav>
    </section>
    <!-- Section Three -->
    <section class="one_quarter">
      <h2 class="title">Know about Fashion</h2>
      <nav>
        <ul>
          <li><a href="#"></a></li>
          <li><a href="#">Newyork Fashion week</a></li>
          <li><a href="#">Summer Fashion -Paris</a></li>
          <li><a href="#">Women's Fashion Style</a></li>
          <li><a href="#">Victoria Secret</a></li>
        </ul>
      </nav>
    </section>
    
    <!-- Section Four -->
    <section class="one_quarter lastbox">
      <h2 class="title">Career</h2>
      <nav>
        <ul>
          <li><a href="http://www.bradley.edu/campuslife/">Browse Jobs</a></li>
          <li><a href="http://www.bradley.edu/admissions/">Our Employers</a></li>
          <li><a href="http://www.bradley.edu/academic/colleges/cfa/">Internships</a></li>
          <li><a href="#http://www.bradley.edu/scc/">Job Advice</a></li>
        </ul>
      </nav>
    </section>
    <!-- / Section -->
    
    
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - <a href="#">Bradley University</a></p>
    <p class="fl_right">By Mahananda Nyamagouda</p>
  </footer>
</div>
</body>
</html>
