<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>staff</title>
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
      
      		<div id="faculty-mainBody">
            
            	<div id="faculty-left">
                	
                    <div id="faculty-left-top">
                    
	                    <img src="images/faculty.png" alt="faculty" />
    
    				</div>
                    
                    <div id="faculty-left-bttm">
                                    
                    	<img src="images/faculty_logo.png" alt="faculty_logo">
                
                	</div>
                    
                </div>
                
                <div id="faculty-right">
                
                	<form action="staff-sub.php" name="staffform" onsubmit="return mystaffform()" method="post">
                    
                    	<input type="text" placeholder="faculty ID" name="staffname" id="staffbox1" /><label id="staffstar1">
                        </label>
                        
                        <input type="text" placeholder="faculty name" name="staffpass" id="staffbox2" /><label id="staffstar2">
                        </label>

						<select>
                        
                        	<option>facuilty type</option>
                            <option>head of deprt</option>
                            <option>professor</option>
                            
                        </select>         
                        
                        <input type="submit" value="submit" onclick="mystaffform()" />   
                                                 
                    </form>
                
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
