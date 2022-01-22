<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>home</title>
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="script/script.js">
	</script>    
</head>
<body onload="my()">

	<div id="wrapper">
    
    	<div id="container">
        
        	<!--------------------------------header-------------------------------------------->
        
        	<div id="header">
         		
                <?php include('header.php'); ?>   
            	
 				<div id="strip"></div>
                
            </div>
         	
            <!--------------------------------banner------------------------------------------->           
            
            <div id="banner">
            	
            	<img src="images/home2.png" alt="pu-banner1" />
            
            </div>
            
            <!--------------------------------banner-button-------------------------------------------->
            
            <div id="banner-button">
                
               	<div class="banner-button-shape" onclick="mybutton()"></div>
                <div class="banner-button-shape" onclick="mybutton2()"></div>
                <div class="banner-button-shape" onclick="mybutton3()"></div>
                <div class="banner-button-shape" onclick="mybutton4()"></div>
                    
            </div>
            
			<!--------------------------------content-------------------------------------------->
            
            <div id="content">
            
            	<div id="content-welcome">
                
                	<h1>welcome to punjabi university</h1>
                    
                    <p>
                    
                    Punjabi University Patiala, one of the premier institutions of higher education in the north of India, was 
                    established on the 30th April, 1962 under the Punjabi University Act 1961. This is the second University in 
                    the world to be named after a language, the first being Hebrew University of Israel. Although initially the 
                    main task Punjabi University Patiala, one of the premier institutions of higher education in the north of 
                    India, was established on the 30th April, 1962 under the Punjabi University Act 1961.he Punjabi University 
                    Act 1961. This is the second University in the world to be named after a language,  Patiala, one of the 
                    premier institutions of higher education in the north of India, was established on the 30th April, 1962 
                    under the Punjabi University Act 1961.he Punjabi University Act .......
                    
                    </p>
                    
                    <a href="about-uni.php"><h3>read more</h3></a>
                
                </div>
                
                <div id="content-news">
                
                	<h2>latest news</h2>
                    
                    <div class="content-news-detail">
                    
                    	<a href="result.php"><h4>results</h4></a>
                        
                        <p>Eight undergraduates to present research at annual </p>
                    
                    </div>
                    
                    <div class="content-news-detail">
                    
                    	<a href="events.php"><h4>events</h4></a>
                        
                        <p>Eight undergraduates to present research at annual </p>
                    
                    </div>
                    
                    <div class="content-news-detail">
                    
                    	<a href="syllabus.php"><h4>syllabus</h4></a>
                        
                        <p>Eight undergraduates to present research at annual </p>
                    
                    </div>
                
                </div>
            
            </div>
            
			<!--------------------------------key people-------------------------------------------->
          
            <div id="key-people">
            
            	<div id="key-people-mainText">
                
                	<h1>the key people</h1>
                
                </div>
                
                <div id="key-people-subPics">
                
                	<div id="key-people-subPics-Top">
                
                        <img onclick="mykey1()" src="images/home-key_man1.png" alt="man1" />
                        
                        <img onclick="mykey2()" src="images/home-key_man2.png" alt="women1" />
                        
                        <img onclick="mykey1()" src="images/home-key_man1.png" alt="man1" />
                        
                        <img onclick="mykey2()" src="images/home-key_man2.png" alt="women1" />

					</div>
                    
                    <div id="key-people-subPics-Btm">
                    	
                        <img onclick="mykey2()" src="images/home-key_man2.png" alt="women1" />
                        
                        <img onclick="mykey1()" src="images/home-key_man1.png" alt="man1" />
                        
                        <img onclick="mykey2()" src="images/home-key_man2.png" alt="women1" />
                        
                        <img onclick="mykey1()" src="images/home-key_man1.png" alt="man1" />
                        
					</div>
                    	                
                </div>
            
            	<div id="key-people-details">
                
                	<img src="images/home-keydetail_man1.png" alt="man_details" />
                
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
