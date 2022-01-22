<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>admin</title>
    <link href="../style/style.css" rel="stylesheet" type="text/css" />
    <script src="../script/script.js" language="javascript" type="text/javascript">
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
      
      		<div id="admin-mainBody">
            
            	<div id="admin-left">
                	
                    <div id="admin-left-top">
                    
	                    <img src="images/admin.png" alt="adminstrator" />
    
    				</div>
                    
                    <div id="admin-left-bttm">
                                    
                    	<img src="images/admin_logo.png" alt="admin_logo">
                
                	</div>
                    
                </div>
                
                <div id="admin-right">
                
                	<form name="adminform" action="admin-sub.php" onsubmit="return myadminform()" method="post">
                    
                    	<input id="adminbox1" type="text" placeholder="enter your ID" name="adminname"/><label id="adminstar1">
                        </label>
                        
                        <input id="adminbox2" type="password" placeholder="password" name="adminpass"/><label id="adminstar2">
                        </label>
                        
                        <input type="submit" value="submit" onclick="myadminform()" />   
                                                
                    </form>
                
                </div>
            
            </div>		   	
  
			<!--------------------------------footer-------------------------------------------->
                        
            <!-- <div id="footer">
            
            	<?php include('footer.php'); ?>
                
            </div>-->
        
        <!---------end--------->
        
        </div>
    
    </div>

</body>
</html>
