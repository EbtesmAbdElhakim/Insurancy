<?php

session_start();


?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>profile</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="try.css">
        <body id="body_profile">
        <div id="divwrapper">
            <div id="divheader"> 
		   
		   <h1> Insurancy</h1></div>
           <div id="divLine"></div>
        <div id="divLinks">
           <div id="divNav"> 
	
       
    
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="login.html"class="current">Profile</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact us.html">Contact us</a></li>
                    
                    



                </ul>

            </div>
           
           
           
           </div>
        
        </div>
           <div class="profile-info">
	<br>
            <marquee> Put your Ads here</marquee>
			
      <div class="patient"id="p_info">  
        
          
        <img  src="chemical.jpg"style="width:180px;height:180px;margin-left:25px;margin-top:20px;">
		  <div class="b.photo">
     </div>

	 <div class="div1">
	 </div>
	 
	 <br>
	<ul class="b">
  <li>NAME:
<?php echo $_SESSION['E_MAIL']; ?>
  </li>
  <br>
      <li>Address:</li>
   <br>
  <li>AGE:</li>
  <br>
   <li>GENDER:</li>
  
  <br>
  <li>Phone:</li>
  <br>

<li>INSURED BY:</li>
   <br>
      
  <li> COUPONS:</li>
 
  
</ul>
	 </div>
		<!--   <div class="p_history">  <!--الاماكن اللي زرها المريض -->
        <!-- 
		
		  </div> -->
    <div class="patient" id="p_history">  <!--معلومات عن المريض -->
        

<div class ="his">
           <h2>HISTORY</h2> 
		  </div>
		   <div class="div2">
	 </div>
		  </div>
      
   <div class="patient"id="p_recommendation">  <!--معلومات عن المريض -->
        
          <div class="rec">
           <h3>RECOMMENDATIONS</h3>
		  </div>
		   <div class="div3">
	 </div>
       </div>
   </div>
	       </div>
         </div>
		  
 <footer id="footer_profile">
  
   
               <div> 
                    <img src="fb.png">
                    <img src="Linkedin.png">
                    <img src="twitter.png">
                 
                
             
<p>Copy right 2017 &copy; All rights reserved to .. </p></footer>
            <!-- End footer -->
            </footer>  
       
 </body>
	  
</html>

