<!DOCTYPE html>
<html>
<head>

	<title>Syed Sheeraz Zaidi::Portfolio</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="script.js"></script>
	<script src="js/about.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/skill.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/exp.css">
	<link rel="stylesheet" type="text/css" href="css/skill.css">

	<!-- <style>body{background-color:#152836}h2{color:#fff;margin-bottom:40px;text-align:center;font-weight:100;}</style> -->
	<meta name="viewport" content="width=device-width initial-scale:1.0">

</head>
<body>
<div id="header">
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#" id="myName">Syed Sheeraz Zaidi</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="http://localhost:8081/responsive/practice/" id="home" onclick="con_home()">Home</a>
	      <a class="nav-item nav-link" href="#about"  id="about" onclick="con_change()">About</a>
	      <a class="nav-item nav-link" href="#contact" id="contact" onclick="con_contact()">Contact</a>
	      <a class="nav-item nav-link" href="#projects" id="projects" onclick="con_project()">Projects</a>
	      <a class="nav-item nav-link" href="#experience" id="experience" onclick="con_experience()">Experience</a>
	      <a class="nav-item nav-link" href="#skill" id="skills" onclick="con_skill()">Skills</a>
	      <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
	    </div>
	  </div>
	</nav>

</div>


<div id="main_content">
	
	
	<div id="slider">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
		    
		    <div class="carousel-item active" >

		      <img class="d-block w-100" src="images/welcome2.jpg" alt="Second slide">
		    </div>
		    <!-- <div class="carousel-item">
		      <img class="d-block w-100" src="images/cs2.jpg" alt="Third slide">
		    </div> -->
		  </div>
		  <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a> -->
		</div>
	</div>
	<div class="row">
		<div id="left" class="col-md-6">
		
		<img src="images/me.jpg" width="40%" height="400">
		<!-- <h4>Hi This is me Syed Sheeraz Zaidi</h4> -->
		</div>
		<div id="right" class="col-md-6">
			<h3>Career Objective</h3>
			<p align="left">Wholly enthusiastc towards excellence in my feld of study, I have zest in building and learning new technology. Besides this I wish to become a valuable asset for the organizaton with which I work, with the effective use of my skills and capabilites.</p>

			<h3>Professional Summry</h3>
			<ul>
				<li>Total of 2 and a half years of work experience in the software development domain.</li>
				<li>Experienced System Adminstrator with a demonstrated history of working in information technology and service domain.</li>
				<li>Skilled in SQL,Core PHP,Codeignitor,Python,Ruby on Rails and JavaScript</li>
				<li>Strong Information Technology Professional with a Bachelor's Degree focused in Computer Science and Engg.</li>
				<li>Former System Adminstrator at Wipro Infotech.</li>
				<li>Currently Working on an E-Commers project foucused in online food ordering and delivary services.</li>

			</ul>
		</div>	
	</div>
	<div class="row" style="background-color: lightblue; margin-top: 10px;">
		<div class="container" id="contact_page_desc">
		
    	<div class="col-md-6" id="content_left" style="height: auto;">
    		<div class="content" id="desc_head" >
    			<h2>
    			No need to hesitate, get in touch for an open, honest conversation about your projects and prospects. 
	    		</h2>
	    		<img src="images/me.jpg" class="contact__blockImg">
	    		<a href="mailto:zaidi_sheeraz@hotmail.com" class="contact__blockTextLink textColor textColor--blue">zaidi_sheeraz@hotmail.com</a>
	    		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="contact__blockTextIcon"><path fill="#8DA2A4" d="M6.77152749 9.22858746c1.58340368 1.58340364 3.41700794 3.09700714 4.14160962 2.37220554 1.03780241-1.0376024 1.6776039-1.94140454 3.96500921-.1030003 2.28760531 1.8392043.53060123 3.0646071-.4746011 4.0702095-1.1600027 1.1598027-5.48421274.0610001-9.75842262-4.2126098C.3715126 7.08078247-.7280899 2.75657242.4327128 1.59616973c1.0054023-1.00540234 2.2308051-2.76180642 4.0692094-.4740011 1.83880429 2.28680531.9354022 2.9268068-.1026002 3.96460921-.7244017.72480168.7888018 2.55820594 2.37220549 4.14180962z"></path></svg>(+91)8052048759	
    		</div>
    		<ul class="contact__blockSocial">
              <li class="contact__blockSocialItem">
                <a href="https://twitter.com/zaidisheeraz" target="_blank" class="contact__blockSocialLink textColor textColor--white"><img src="images/twiiter.png" width="47px;"></a>
              </li>
              <li class="contact__blockSocialItem">
                <a href="https://www.linkedin.com/in/syedsheerazzaidi" target="_blank" class="contact__blockSocialLink textColor textColor--white"><img src="images/linkedin.png" width="47px;"></a>
              </li>
            </ul><br>
            <div class="contact__blockCell contact__blockCell--center"><br>
	            <p class="contact__blockText">
		            178/111 <br>
					Ghanti Wala Ghar <br>
					Golaganj Near Maqbara <br>
					Lucknow <br>
					226018 <br>
				</p>
        	</div>
    	</div>
    	
    	<div class="col-md-6" id="content_right" style="height: auto;">
    		<div class="content">
    			<form>
    				<span id="response"></span>
    				<input type="text" name="fullName" id="fullName" class="form-control" placeholder="*FullName" style="margin-bottom: 10px;">
    				<p id="err1" class="a"></p>
    				<input type="email" name="email" id="email" style="margin-bottom: 10px;" class="form-control" placeholder="*Email">
    				<p id="err2" class="a"></p>
    				<input type="text" name="contactNo" id="contactNo" style="margin-bottom: 10px;" class="form-control" style="margin-bottom: 10px;" placeholder="*Contact No.">
    				<p id="err3" class="a"></p>
    				<textarea class="form-control" id="message" rows="10" cols="50" style="margin-bottom: 10px;" placeholder="*Your Message here..."></textarea>
    				<p id="err4" class="a"></p>
    				<button type="button" class="btn btn-success" id="btn_stb" onclick="sub_fun()">Send Message</button>
    			</form>
    			
    		</div>
    	</div>
	</div>
	</div>
	
</div>

<div id="footer">
	<h3>This site was designed by <a href="https://www.sheeraz.info" target=" ">Syed Sheeraz Zaidi</a></h3>
</div>
<script>
            $(document).ready(function(){
                //$('#lightgallery').lightGallery(); 
                $("#light").click(function(){

                alert("kkkk");
                });
            });
</script>
<script type="text/javascript">
	

</script>  

</body>
</html>