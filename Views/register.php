<!DOCTYPE html>
<html>
<head>
<title>Fashion Club-Register</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/layout.css" type="text/css">
<link href="../css/register.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/formLib.js" ></script>

<script type="text/javascript">
	
	
	function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confirm_password');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
   var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
	function start(){
		var current = new Date();
		document.getElementById("strings").innerHTML="<p style=\"color:red;text-align:right;font-size:15px;\">Date : "+current.toString()+"</p>";
			}
	window.addEventListener("load",start,false);
	
	 
    //   function validateForm ( form ) {
          
    //       requiredText = new Array( "firstname","lastname","email","username","filename","dob", "address", "city", "zip", "home_phone", "work_phone", "age","social_security");
          
    //       requiredSelect = new Array( "state", "country" );
    //       requiredRadio  = new Array( "gender" );
	// 	  requiredCheckbox = new Array("interests");
          
    //       return requireValues ( form, requiredText   ) &&
    //              requireSelects( form, requiredSelect ) &&
    //              requireRadios ( form, requiredRadio  ) &&
	// 		  	requiredCheckboxs(form, requiredCheckbox) &&
    //              checkProblems ();
    //   }
	</script>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="home.php">Fashion Club</a></h1>
      <h2>The joy of dressing is an Art!</h2>
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
  <div id="container" class="clear">
   
    <!-- Slider -->
    <div class="login-page" >
  <div class="form">
    <form class="login-form" action="../registerUser.php" method="post" enctype="multipart/form-data">
				<input type="text" placeholder="First Name" name="firstname" required>
				<input type="text" placeholder="Last Name" name="lastname" required>
				<input type="email" placeholder="Email ID" name="email" onChange="checkEmail( this );" required>
				<input type="text" placeholder="Enter username" name="username" required>
				<input type="password" placeholder="Enter your password" name="password" id="password" required>
				<div id="pass"><input type="password" placeholder="Confirm password" name="password" id="confirm_password" onkeyup="checkPass(); return false;" required><span id="confirmMessage" class="confirmMessage"></span></div><br>
				<input type="date" placeholder="Date Of Birth" name="dob" required>
				 <input type="text" name="address" size="40" placeholder="Address" maxlength="50" required>
				 <select name="state" class="name3" required>
              <option value="">Please Choose a State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="WY">Wyoming</option>
            </select>
				<select class="name3" name="country" required>
        <option value="">Please Choose a Country</option>
         <option value="USA">United States of America</option>
         	<option value="Mexico">Mexico</option>
         	<option value="Paris">Paris</option>
         	<option value="London">London</option>
         	<option value="Brazil">Brazil</option>
         	<option value="Switzerland">Switzerland</option>
         </select>
         
         <input type="text" name="zip" size="5" placeholder="ZipCode" maxlength="5"
                onChange="checkZip( this );">
                <input type="text" name="home_phone" size="12" maxlength="12" placeholder="Home Phone"
              onChange="checkPhone( this );">
              <input type="text" name="work_phone" size="12" maxlength="12" placeholder="Work Phone"
              onChange="checkPhone( this );">
              <input type="text" name="social_security" size="11" maxlength="11" placeholder="Social Security Number" 
              onChange="checkSSN( this );">
              <input type="text" name="age" size="3" maxlength="3" placeholder="Age"
              onChange="checkAge( this );">
               <select name="education" size="1" class="name3">
              <option value="">Please Choose a Category</option>
              <option value="grade">Grade School</option>
              <option value="high">High School Graduate (or GED)</option>
              <option value="college">Some College</option>
              <option value="junior">Technical or Junior College Degree</option>
              <option value="bachelors">Four Year College Degree</option>
              <option value="graduate">Post Graduate Degree</option>
            </select>
		  <div class="radio">
		  	<p>Gender: 
		  	    <input type="radio" name="gender" value="Male" id="gender_0" class="radio1">
		  	    <label>Male</label>
		  	    <input type="radio" name="gender" value="Female" id="gender_1" class="radio1">
		  	    <label>Female</label>
	  	    </p>
          
        <div class="checkbox">
       	  <p><p>Interests:</p><br>
        	    <input type="checkbox" name="interests" value="drawing" id="interests_0" class="checkbox1">
        	    <label>Drawing</label>
      
        	    <input type="checkbox" name="interests" value="sketching" id="interests_1" class="checkbox1">
        	    <label>Sketching</label>
        	         	
        	    <input type="checkbox" name="interests" value="Designing" id="interests_2" class="checkbox1">
        	    <label>Designing</label>
        	         	  
        	    <input type="checkbox" name="interests" value="Modeling" id="interests_3" class="checkbox1">
        	    <label>Modeling</label>
        	       	  
        	    <input type="checkbox" name="interests" value="Decorate" id="interests_4" class="checkbox1">
        	    <label>Decorate</label>
        	  <input type="checkbox" name="interests" value="Finance" id="interests_5" class="checkbox1">
        	    <label>Finance</label>
      	  </p>
        </div></div><br><br>
        Update Profile Picture:<input type="file" name="file" class="file" required><br>
        File Name:<input type="text" name="filename" required><br>
        <input type="submit" value="Register" class="button"><input type="reset" value="Reset" class="button">
		
      <p class="message">Already member? <a href="login.php">Login</a></p>
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
              <footer class="more"><a href="login.php">Read More &raquo;</a></footer>
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
          <figure><img src="images/image7.jpg" width="450" height="450" alt="">
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
