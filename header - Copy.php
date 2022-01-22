<div id="header-left">

    <img src="images/PU_logo.png" alt="pu_logo" />

</div>

<div id="header-right">

    <div id="header-right-login">

        <form>
        
            <select onchange="(window.location = this.options[this.selectedIndex].value)">
            
                <option>login</option>
                <option value="student.php">student</option>
                <option value="staff.php">staff</option>
            
            </select>
            
        </form>
        
    </div>
    
    <div id="header-right-menus">

        <ul>
        
            <script language="javascript" type="text/javascript">
            
                var menus = Array('contact-us','academics','gallery','admission','home');
            
                for(var items=0; items < menus.length; items++)
                {
                    document.write('<li><a href="'+menus[items]+'.php">'+menus[items]+'</a></li>');
                }
            
            </script>
            
        </ul>

    </div>

</div>
