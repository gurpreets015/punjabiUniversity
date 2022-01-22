<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>syllabus</title>
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
      
      		<div id="syllabus-mainBody">
            
            	<div id="syllabus-left">
                	 
	            	<img src="images/syllabus.png" alt="results" />
    
    			</div>
                
                <div id="syllabus-right">
                
                	<form action="syllabus-sub.php" name="syllabusform" onsubmit="return mysyllabusform()" method="post">
                    
						<input type="text" placeholder="enter your class" name="syllabusname" id="syllabusbox1"/>
                        <label id="syllabusstar1"></label>
                        
                        <select>
                        
                        	<option>your semester</option>
                            <option>1st semester</option>
                            <option>2nd semester</option>
                            <option>3rd semester</option>
                            <option>4th semester</option>
                            <option>5th semester</option>
                            <option>6th semester</option>
                            <option>7th semester</option>
                            <option>8th semester</option>
                        	
                        </select>
                        
                        <select>
                        
                        	<option>department name</option>
                            <option>computer science</option>
                            <option>law</option>
                            <option>botany</option>
                            <option>engineering</option>
                            <option>media</option>
                        	
                        </select>     
                        
                        <input type="submit" value="submit" onclick="mysyllabusform()" />   
                                                
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
