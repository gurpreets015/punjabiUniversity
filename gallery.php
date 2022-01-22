<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>gallery</title>
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="script/script.js">
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
               
        	<div id="gallery-mainBody">
            	
                <div id="strip_gallery"></div>
            	
            	<h1>our gallery</h1>
            
            	<div id="gallery-menus">
                
                	<ul>
                    	
                        <li onclick="dept()">departments</li>
                        <li onclick="museum()">museum</li>
                        <li onclick="library()">library</li>
                        <li onclick="campus()">campus</li>
                        <li onclick="hostels()">hostels</li>
                    
                    </ul>
                    
                </div>
                
						<!----------------------dept---------------------->					
                                                            
                <div id="gallery-department">
                
                    <div id="gallery-dept-imagebox">
                    
                        <img src="images/gallery-department.png" alt="computer-science" />
                      
                    </div>
                                   
                    <div id="gallery-dept-subImagebox">
                    
                    	<div class="gallery-box1">
 							                                                   
                        	<img onclick="mydept()" src="images/gallery-departmt-hover.png" alt="computer-science" />
                            
                        </div>
                        
                        <div class="gallery-box2">
                        
                        	<img onclick="mydept2()" src="images/gallery-departmt1.hover.png" alt="engg._dept">
                        
                        </div>
                        
                        <div class="gallery-box3">
                        
                        	<img onclick="mydept()" src="images/gallery-departmt-hover.png" alt="computer-science" />
                        
                        </div>
                        
                        <div class="gallery-box4">
                        
                        	<img onclick="mydept2()" src="images/gallery-departmt1.hover.png" alt="engg._dept">
                        
                        </div>
                    
                    </div>
                    
                </div>   
                
                			<!----------------------museum---------------------->	
                
                <div id="gallery-museum">
                
                    <div id="gallery-museum-imagebox">
                    
                        <img src="images/gallery-museum.png" alt="museum" />
                      
                    </div>
                                   
                    <div id="gallery-museum-subImagebox">
                    
                       <div class="gallery-box1">
                        
                        	<img onclick="mymuseum()" src="images/gallery-museum_sub2.png" alt="museum" />
                            
                        </div>
                        
                        <div class="gallery-box2">
                        
                        	<img onclick="mymuseum2()" src="images/gallery-museum_sub.png" alt="inside_museum">
                        
                        </div>
                        
                        <div class="gallery-box3">
                        
                        	<img onclick="mymuseum()" src="images/gallery-museum_sub2.png" alt="museum" />
                        
                        </div>
                        
                        <div class="gallery-box4">
                        
                        	<img onclick="mymuseum2()" src="images/gallery-museum_sub.png" alt="inside_museum">
                        
                        </div>
                        
                    </div>
                    
                </div>  
                
                		<!----------------------library---------------------->	
                        				
                                                            
                <div id="gallery-library">
                
                    <div id="gallery-lib-imagebox">
                    
                        <img src="images/gallery-library.png" alt="library" />
                      
                    </div>
                                   
                    <div id="gallery-lib-subImagebox">
                    
                        <div class="gallery-box1">
                        
                        	<img onclick="mylibrary()" src="images/gallery-library_sub.png" alt="library" />
                            
                        </div>
                        
                        <div class="gallery-box2">
                        
                        	<img onclick="mylibrary2()" src="images/gallery-library_sub1.png" alt="library_reading">
                        
                        </div>
                        
                        <div class="gallery-box3">
                        
                        	<img onclick="mylibrary()" src="images/gallery-library_sub.png" alt="library" />
                        
                        </div>
                        
                        <div class="gallery-box4">
                        
                        	<img onclick="mylibrary2()" src="images/gallery-library_sub1.png" alt="library_reading">
                        
                        </div>
                    
                    </div>
                    
                </div>   
                
                			<!----------------------campus---------------------->	
                
                <div id="gallery-campus">
                
                    <div id="gallery-campus-imagebox">
                    
                        <img src="images/gallery-campus.png" alt="campus" />
                      
                    </div>
                                   
                    <div id="gallery-museum-subImagebox">
                    
                       <div class="gallery-box1">
                        
                        	<img onclick="mycampus()" src="images/gallery-campus_sub.png" alt="campus" />
                            
                        </div>
                        
                        <div class="gallery-box2">
                        
                        	<img onclick="mycampus2()" src="images/gallery-campus_sub1.png" alt="inside_campus">
                        
                        </div>
                        
                        <div class="gallery-box3">
                        
                        	<img onclick="mycampus()" src="images/gallery-campus_sub.png" alt="campus" />
                        
                        </div>
                        
                        <div class="gallery-box4">
                        
                        	<img onclick="mycampus2()" src="images/gallery-campus_sub1.png" alt="inside_campus">
                        
                        </div>
                        
                    </div>
                    
                </div>  
                
                  			<!----------------------hostels---------------------->	
                
                <div id="gallery-hostels">
                
                    <div id="gallery-hostels-imagebox">
                    
                        <img src="images/gallery-hostels.png" alt="hostels-room" />
                      
                    </div>
                                   
                    <div id="gallery-hostels-subImagebox">
                    
                       <div class="gallery-box1">
                        
                        	<img onclick="myhostels()" src="images/gallery-hostels_sub.png" alt="museum" />
                            
                        </div>
                        
                        <div class="gallery-box2">
                        
                        	<img onclick="myhostels2()" src="images/gallery-hostels_sub1.png" alt="inside_museum">
                        
                        </div>
                        
                        <div class="gallery-box3">
                        
                        	<img onclick="myhostels()" src="images/gallery-hostels_sub.png" alt="museum" />
                        
                        </div>
                        
                        <div class="gallery-box4">
                        
                        	<img onclick="myhostels2()" src="images/gallery-hostels_sub1.png" alt="inside_museum">
                        
                        </div>
                        
                    </div>
                    
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
