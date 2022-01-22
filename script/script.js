// JavaScript Document

/*-------------------------home(slider-changer)------------------------------*/

var box = 0;
var trigg = true;
var i = 1000;
var j = 1;

function my()
{
	setTimeout('my2()',1);	
}

function my2()
{
	if(box >= 1000)
	{
		trigg = false;	
	}
	
	if(box <= 0)
	{
		trigg = true;	
	}
	
	if(trigg)
	{
		box+=.9;	
	}
	else
	{
		box = 0;	
	}
	
	if(i <= box)
	{
		document.getElementById('banner').innerHTML = '<img src="images/home'+j+'.png" alt="home"/>';
		j++;	
	}
	
	if(j > 3)
	{
		j=1;
	}
	
	document.getElementById('strip').style.width = box+'px';
	my();
}

function mybutton()
{
	document.getElementById('banner').innerHTML = '<img src="images/home1.png" alt="home1"/>';	
}

function mybutton2()
{
	document.getElementById('banner').innerHTML = '<img src="images/home2.png" alt="home1"/>';
}

function mybutton3()
{
	document.getElementById('banner').innerHTML = '<img src="images/home3.png" alt="home1"/>';	
}

function mybutton4()
{
	document.getElementById('banner').innerHTML = '<img src="images/home1.png" alt="home1"/>';	
}

/*-------------------------home(key people)--------------------------*/

function mykey1()
{
	document.getElementById('key-people-details').innerHTML = '<img src="images/home-keydetail_man1.png" alt="events" />';	
}

function mykey2()
{
	document.getElementById('key-people-details').innerHTML = '<img src="images/home-keydetail_man2.png" alt="events" />';	
}

//-------------------------------------------------------events(program)--------------------------------------------------------


function myevents()
{
	document.getElementById('events-leftSection').innerHTML = '<img src="images/events-left-pic.png" alt="events" />';	
}

function myevents2()
{
	document.getElementById('events-leftSection').innerHTML = '<img src="images/events-left-pic2.png" alt="events" />';	
}

function myevents3()
{
	document.getElementById('events-leftSection').innerHTML = '<img src="images/events-left-pic3.png" alt="events" />';	
}
	
//------------------------------------------------------gallery(image)-----------------------------------------------------------

function dept()
{
	document.getElementById('gallery-department').style.height = "480px";	
	document.getElementById('gallery-museum').style.height = "0px";
	document.getElementById('gallery-library').style.height = "0px";	
	document.getElementById('gallery-campus').style.height = "0px";
	document.getElementById('gallery-hostels').style.height = "0px";	
}

function mydept()
{
	document.getElementById('gallery-dept-imagebox').innerHTML = '<img src="images/gallery-department.png" alt="computer-science" />';
}

function mydept2()
{
	document.getElementById('gallery-dept-imagebox').innerHTML = '<img src="images/gallery-department2.png" alt="computer-science" />';
}

var dptbox = 0;
var dpttrigg = true;
var dpti = 1000;
var dptj = 1;

mygllydpt();

function mygllydpt()
{
	setTimeout('mygllydpt2()',1);	
}

function mygllydpt2()
{
	if(dptbox >= 1000)
	{
		dpttrigg = false;	
	}
	
	if(dptbox <= 0)
	{
		dpttrigg = true;	
	}
	
	if(dpttrigg)
	{
		dptbox+=1;	
	}
	else
	{
		dptbox-=100;	
	}
	
	if(dpti <= dptbox)
	{
		document.getElementById('gallery-dept-imagebox').innerHTML = '<img src="images/gallery-department'+dptj+'.png" alt="department"/>';
		dptj++;	
	}
	
	if(dptj > 2)
	{
		dptj=1;
	}
	
	document.getElementById('strip_gallery').style.width = dptbox+'px';
	mygllydpt();
}


/*-----museum-----*/

function museum()
{
	document.getElementById('gallery-department').style.height = "0px";	
	document.getElementById('gallery-museum').style.height = "480px";
	document.getElementById('gallery-library').style.height = "0px";	
	document.getElementById('gallery-campus').style.height = "0px";
	document.getElementById('gallery-hostels').style.height = "0px";	
}

function mymuseum()
{
	document.getElementById('gallery-museum-imagebox').innerHTML = '<img src="images/gallery-museum.png" alt="museum"/>';	
}

function mymuseum2()
{
	document.getElementById('gallery-museum-imagebox').innerHTML = '<img src="images/gallery-museum2.png" alt="museum"/>';	
}

/*-----library-----*/


function library()
{
	document.getElementById('gallery-department').style.height = "0px";	
	document.getElementById('gallery-museum').style.height = "0px";
	document.getElementById('gallery-library').style.height = "480px";	
	document.getElementById('gallery-campus').style.height = "0px";
	document.getElementById('gallery-hostels').style.height = "0px";	
}

function mylibrary()
{
	document.getElementById('gallery-lib-imagebox').innerHTML = '<img src="images/gallery-library.png" alt="library" />';
}

function mylibrary2()
{
	document.getElementById('gallery-lib-imagebox').innerHTML = '<img src="images/gallery-library1.png" alt="library1" />';
}

/*-----campus-----*/

function campus()
{
	document.getElementById('gallery-department').style.height = "0px";	
	document.getElementById('gallery-museum').style.height = "0px";
	document.getElementById('gallery-library').style.height = "0px";	
	document.getElementById('gallery-campus').style.height = "480px";
	document.getElementById('gallery-hostels').style.height = "0px";	
}

function mycampus()
{
	document.getElementById('gallery-campus-imagebox').innerHTML = '<img src="images/gallery-campus.png" alt="campus" />';	
}

function mycampus2()
{
	document.getElementById('gallery-campus-imagebox').innerHTML = '<img src="images/gallery-campus1.png" alt="campus" />';	
}

/*-----hostels-----*/

function hostels()
{
	document.getElementById('gallery-department').style.height = "0px";	
	document.getElementById('gallery-museum').style.height = "0px";
	document.getElementById('gallery-library').style.height = "0px";	
	document.getElementById('gallery-campus').style.height = "0px";
	document.getElementById('gallery-hostels').style.height = "480px";	
}

function myhostels()
{
	document.getElementById('gallery-hostels-imagebox').innerHTML = '<img src="images/gallery-hostels.png" alt="hostels-room" />';	
}

function myhostels2()
{
	document.getElementById('gallery-hostels-imagebox').innerHTML = '<img src="images/gallery-hostels1.png" alt="hostels-room" />';	
}

//------------------------------------------------------admin(page)-------------------------------------------------------------

function myadminstu()
{
	document.getElementById('admin-student').style.height = "160px";
	document.getElementById('admin-staff').style.height = "0px";	
}

function myadminstaff()
{
	document.getElementById('admin-student').style.height = "0px";
	document.getElementById('admin-staff').style.height = "200px";		
}

var admuser;
var admpass;

function myadminform()
	{
		var admuser = adminform.adminname.value;
		var admpass = adminform.adminpass.value; 
		
		if(admuser == "" && admpass == "")
		{
			document.getElementById('adminbox1').style.border = "2px solid salmon";
			document.getElementById('adminstar1').innerHTML = "*";	
			document.getElementById('adminbox2').style.border = "2px solid salmon";
			document.getElementById('adminstar2').innerHTML = "*";
			return false;
		}
		
		if(admuser == "pu" && admpass == "pu")
		{
			document.getElementById('adminbox1').style.border = "2px solid lime";
			document.getElementById('adminbox2').style.border = "2px solid lime";	
			return true;
		}
		else
		{
			document.getElementById('adminbox1').style.border = "2px solid salmon";
			document.getElementById('adminstar1').innerHTML = "invalid username";	
			document.getElementById('adminbox2').style.border = "2px solid salmon";
			document.getElementById('adminstar2').innerHTML = "invalid password";	
			return false;
		}
		
	}

//--------------------------------------------------student(page)---------------------------------------------------------------

var studuser;
var studpass;

function mystudform()
	{
		var studuser = studform.studname.value;
		var studpass = studform.studpass.value; 
		
		if(studuser == "" && studpass == "")
		{
			document.getElementById('studbox1').style.border = "2px solid salmon";
			document.getElementById('studstar1').innerHTML = "*";	
			document.getElementById('studbox2').style.border = "2px solid salmon";
			document.getElementById('studstar2').innerHTML = "*";
			return false;
		}
		
		if(studuser == "pu" && studpass == "pu")
		{
			document.getElementById('studbox1').style.border = "2px solid lime";
			document.getElementById('studbox2').style.border = "2px solid lime";	
			return true;
		}
		else
		{
			document.getElementById('studbox1').style.border = "2px solid salmon";
			document.getElementById('studstar1').innerHTML = "invalid username";	
			document.getElementById('studbox2').style.border = "2px solid salmon";
			document.getElementById('studstar2').innerHTML = "invalid password";	
			return false;
		}
		
	}

//--------------------------------------------------staff(page)---------------------------------------------------------------

var staffuser;
var staffpass;

function mystaffform()
	{
		var staffuser = staffform.staffname.value;
		var staffpass = staffform.staffpass.value; 
		
		if(staffuser == "" && staffpass == "")
		{
			document.getElementById('staffbox1').style.border = "2px solid salmon";
			document.getElementById('staffstar1').innerHTML = "*";	
			document.getElementById('staffbox2').style.border = "2px solid salmon";
			document.getElementById('staffstar2').innerHTML = "*";
			return false;
		}
		
		if(staffuser == "pu" && staffpass == "pu")
		{
			document.getElementById('staffbox1').style.border = "2px solid lime";
			document.getElementById('staffbox2').style.border = "2px solid lime";	
			return true;
		}
		else
		{
			document.getElementById('staffbox1').style.border = "2px solid salmon";
			document.getElementById('staffstar1').innerHTML = "invalid ID";	
			document.getElementById('staffbox2').style.border = "2px solid salmon";
			document.getElementById('staffstar2').innerHTML = "invalid name";	
			return false;
		}
		
	}

//--------------------------------------------------result(page)---------------------------------------------------------------

var resultuser;

function myresultform()
	{
		var resultuser = resultform.resultname.value;
		
		if(resultuser == "")
		{
			document.getElementById('resultbox1').style.border = "2px solid salmon";
			document.getElementById('resultstar1').innerHTML = "*";	
			return false;
		}
		
		if(resultuser == "pu")
		{
			document.getElementById('resultbox1').style.border = "2px solid lime";	
			return true;
		}
		else
		{
			document.getElementById('resultbox1').style.border = "2px solid salmon";
			document.getElementById('resultstar1').innerHTML = "invalid roll no";	
			return false;
		}
		
	}

//--------------------------------------------------syllabus(page)---------------------------------------------------------------

var syllabususer;

function mysyllabusform()
	{
		var syllabususer = syllabusform.syllabusname.value;
		
		if(syllabususer == "")
		{
			document.getElementById('syllabusbox1').style.border = "2px solid salmon";
			document.getElementById('syllabusstar1').innerHTML = "*";	
			return false;
		}
		
		if(syllabususer == "pu")
		{
			document.getElementById('syllabusbox1').style.border = "2px solid lime";	
			return true;
		}
		else
		{
			document.getElementById('syllabusbox1').style.border = "2px solid salmon";
			document.getElementById('syllabusstar1').innerHTML = "invalid class";	
			return false;
		}
		
	}


//--------------------------------------------------services(faculty)-----------------------------------------------------------

function myFaculty()
{
	document.getElementById('faculty-Bottom').style.height = "330px";
	document.getElementById('student-Bottom').style.height = "0px";
	document.getElementById('support-Bottom').style.height = "0px";	
}

function myStudent()
{
	document.getElementById('faculty-Bottom').style.height = "0px";
	document.getElementById('student-Bottom').style.height = "330px";
	document.getElementById('support-Bottom').style.height = "0px";	
}

function mySupport()
{
	document.getElementById('faculty-Bottom').style.height = "0px";
	document.getElementById('student-Bottom').style.height = "0px";
	document.getElementById('support-Bottom').style.height = "330px";	
}

