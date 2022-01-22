<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>student</title>
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
      
      		<div id="student-mainBody">
            
            	<div id="student-left">
                	
                    <div id="student-left-top">
                    
	                    <img src="images/student.png" alt="student" />
    
    				</div>
                    
                    <div id="student-left-bttm">
                                    
                    	<img src="images/student_logo.png" alt="student_logo">
                
                	</div>
                    
                </div>
                
                <div id="student-right">
                
                	<form action="student-sub.php" name="studform" onsubmit="return mystudform()" method="post">
                    
                    	<input type="text" placeholder="enter your Roll no" name="studname" id="studbox1"/><label id="studstar1">
                        </label>
                        
                        <input type="password" placeholder="password" name="studpass" id="studbox2"/><label id="studstar2">
                        </label>
                             
                        <input type="submit" value="submit" onclick="mystudform()" />   
                                                
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
