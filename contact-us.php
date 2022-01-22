<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>contact-us</title>
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="script/script.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="script/jquery.interactive_3d.js"></script>
  <script>
	  $(document).ready( function() {
	    $("#i3d").interactive_3d({
	      frames: 38
	    });
	  });
		
	</script>
</head>
<body>	

	<div id="wrapper">
    
    	<div id="container">
        
        	<!--------------------------------header-------------------------------------------->
        
        	<div id="header">
         		
                <?php include('header.php'); ?>   
            	
 				<div id="strip"></div>
                
            </div>
         	
        	<!-- --------------mainBody---------------- -->
      
      		<div id="contact-mainBody">
            
            	<div id="contact-mainBody-left">
                
                	<div id="i3d" class="interactive_3d" style="margin:0 0 0 100px;">
                    
                    	 <img src="images/frames/frame_1.png" width="200">
                      	
                    </div>
                    
                </div>
                
                <div id="contact-mainBody-right">
                
                	<form>
                    
                    	<input type="text" placeholder="First Name" />
                        
                        <input type="text" placeholder="Last Name" />
                    
                    	<input type="email" placeholder="Email ID" />
                        
                        <input type="text" placeholder="Mobile Number" />
                        
                        <textarea rows="5" cols="35" placeholder="write your message"></textarea>
                        
                        <input type="submit" value="submit" />
                    
                    </form>
                
                <h1>the office</h1>
            
                <ul>
                
                    <li>landline: <span>+91(0175)000-0000</span></li>
                    <li>mobile: <span>+91-00000-00000</span></li>
                    <li>email id: <span>punjabi_university@gmail.com</span></li>
                
                </ul>
            
                </div>
                
            </div>
  
			<!--------------------------------footer-------------------------------------------->
                        
            <div id="footer">
            
            	<?php include('footer.php'); ?>
                
            </div>
        
        <!---------end--------->
        
        </div>
    
    </div>

</body>
</html>
