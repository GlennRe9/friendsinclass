<?php
session_start();
    if(!$_SESSION['loggedin'])
    {
    	header("location:index.html?problem=notLoggedin");
        exit;
    }
    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="En-US">
<head>
<link rel="icon" type="image/png" href="http://www.friendsinclass.co.nf/tab.png" sizes="16x16" />
<meta name="author" content="Glenn Regis">
<meta charset="UTF-8">
</head>
<title>Friends in class</title>
<style>
h1 {color:white; font-family:"arial"; text-align:center}

body {

  margin: 0;
  padding: 0;
  background: rgba(36, 96, 70, 1);
}

nav {
  width: 100%;
  margin:0 auto; 
  padding:0;
  }
  
nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  height:45px;
  /*border:solid black;*/
  }
  
nav div ul li {

float:left;
width:33.32%;
/*border:solid yellow;*/

}
.id  {
  width: 60px;
 /* border: solid black;*/
  }
  
.no  {
  width: 100%;
  
  /*border: solid black;*/
  
  } 
.hi  {
  width: 100%;
  line-height:20px;
  display:inline-block !important;
  float:left;
  margin:0px;
  padding: 0 0;
  /*border: solid red;*/
  
  } 

.total  {
width:100%;
font-family:arial;
  color:white;
  text-align: center;
  padding:0;
  display: block;
  width: 100%;
  background: #cdeb8e; /* Old browsers */
  background: -moz-linear-gradient(top,  
  #cdeb8e 0%, #b0ca34 100%); /* FF3.6+ */
  background: rgba(36,96,70, 1);
  /*border:solid black;*/
}  
.bartitle {
font-size:26px;
margin:0;
margin-top:8px;
margin-left:5px;
padding:0;
}
#hello {
width:20%;
height:45px;
border:none;
float:right;
border-left:1px solid white;
}
#myfriendsinclass {
width:20%;
height:45px;
border:none;
float:right;
border-left:1px solid white;
}
#myaccount {
width:20%;
height:45px;
border:none;
float:right;
border-left:1px solid white;
}
#logout {
width:25%;
height:45px;
border:none;
float:right
}

a {
text-decoration:none;
}
a:link {color:white;}
a:visited {color:white}
a:hover {color:grey}
a.filldiv {
display: block;
height: 100%;
width: 100%;
text-decoration: none;
}
.filldiv:hover {
background-color:#A8B1A9;
color: white;
}
.container {
        width: 170px;
        height: 215px;
	text-align: center;
        margin-top:-5px;
	margin-left: auto;
	margin-right: auto;
        margin-bottom:auto;
        border-style:solid;
        border-radius: 15px;
        border-color:#064034;
        border-width:medium;
        background: rgba(36, 96, 70, 0.90);
        /*filter: alpha(opacity=85);
        background-color:#246045;
        opacity: 0.85;*/
        color:white;
                
    }
.container input {
        width: 90%;
        clear: both;
	text-align: center;
        
    }
   
.searchbox ul {

  list-style: none;
  margin: 0;
  padding: 0;
  /*background-color: #246045;
  /*border: solid black;*/
  /*font-size:5px;
  text-align: left;
  padding: 0;
  margin: 0;
  width:5px;*/
  margin-top:2px;
  
}
.searchboxclasswidth {
width:500px;
}
.searchboxcoursewidth {
width:500px;
margin-left:10px;
}
.searchbox div {
display: inline;

}
.searchboxclasswidth li {
  position:relative;
  background-color:#064034;
  border-top-right-radius: 0.5em;
  border-top-left-radius: 0.5em;
  width:100px;
  margin-left:1px;
  display: inline;
  list-style:none;
  text-align:center;
  font-family: 'arial';
  border-top:2px solid grey;
  border-left:2px solid grey;
  border-right:2px solid grey;
}
.searchboxcoursewidth li {
  position:relative;
  background-color:#064034;
  border-top-right-radius: 0.5em;
  border-top-left-radius: 0.5em;
  margin-left:-8px;
  width:400em;
  display: inline;
  list-style:none;
  text-align:center;
  font-family: 'arial';
  border-top:2px solid grey;
  border-left:2px solid grey;
  border-right:2px solid grey;  
}
.searchbox li {
  position:relative;
  background-color:#064034;
  border-top-right-radius: 0.5em;
  border-top-left-radius: 0.5em;
  display: inline;
  list-style:none;
  text-align:left;
  top:0;
  font-family: 'arial';
}
.searchbox p {
  position:relative;
   display: inline;
   font-size:8px;
  list-style:none;
  text-align:left;
  width:100%;
  
  font-family: 'arial';
}
.searchboxclasswidth p {
  position:relative;
  letter-spacing: 0.2px;
   font-size:78.5%;
  text-align:center;
  width:100%;
  margin-left:0.3px;
  border-left:auto;
  font-family: 'arial';
}
.searchboxcoursewidth p {
  position:relative;
  letter-spacing: -0.2px;
   font-size:78.5%;
  text-align:center;
  width:100%;
  
  font-family: 'arial';
}
  
p {
	color: white;
	font-family:"arial", cursive;
	size:100%;
        text-align:center;
}
p.special {
	color:white;
        margin-top: 26px;
       
}
p.right {
	color:white;
        text-align:right;             
}
p.quote {
	color:white;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif
}
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}
.classfinder {
        width: 170px;
        height: 150px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
        margin-bottom:auto;
        border-style:solid;
        border-radius: 15px;
        border-color:#064034;
        border-width:medium;
        background: rgba(36, 96, 70, 0.90);
        /*filter: alpha(opacity=85);
        background-color:#246045;
        opacity: 0.85;*/
        color:white;
                
    }
.classfinder input {
        width: 90%;
        clear: both;
	text-align: center;
        
    }
body
{
background:url(BocconiEntrance3.jpg);
background-size: cover;
}
#form {
	background-color:transparent;
}
</style>
<script>
function validateForm() {
        var x = document.forms["myForm"]["Name"].value;
        if (x == null || x == "") {
        text = "Name must be filled out";
        document.getElementById("textError").innerHTML = text;
        return false;
        }
}
</script>
</head>
<body> 

<nav>
<div class="total">
  <ul>
    <li>
        <div class="id"><a href="welcome.php">
 <img src="grey.png" alt="Friends in class" style="width:42px;height:42px;border:0;"></a></div>
    </li>
    <li>
        <div class="no"><p class="bartitle"><b>Friends in class</b></p></div>
    </li>
    <li>
        <div class="hi" style="">
                <div id="hello"><p style="line-height:45px; margin-top:0px;font-size:13px"><a href="logoff.php" class="filldiv"><b> Logout</b></a></p></div>
                <div id="myfriendsinclass"><p style="line-height:45px; margin-top:0px;font-size:13px"><b><a href="myaccount.php" class="filldiv"> My account</a></b></p></div>
                <div id="myaccount"><p style="line-height:15px; margin-top:0px;font-size:13px"><a href="myfriendsinclass.php" class="filldiv"><b>My<br> Friends in class</b></a></p></div>
                <div id="logout"><p style="text-align:right;margin-right:5px;font-size:13px"><b> Hello <?php print($name); ?> </b></p></div> 
        </div>    
    </li>                                                                                  
   
  </ul>
</div>  
</nav>
<p class="quote"><i><quote> "University's like this little world, a bubble of time separate from everything before and everything after."</quote> </i></p>
<div>
<p style="color:white; font-family:arial; font-size:100%; margin-top: 35px;"> Hello <?php print($name); ?>, welcome to Friends in class. <br>
Now you can check out your friends, see what students are in a particular class, or find out what your friends are saying on a given course. <br><br></p>
</div>

<div class="container">
<p style="text-align:center;padding:0px;margin:0px;margin-top:8px"><b>Class your friends</b></p>
<form name="myForm" action="results.php" method="post" accept-charset="utf-8">
<p align="center" ><b> Name: <input type="text" name="Name"/> </b></p>
<p id="textError"></p>
<p align="center" ><b> Surname: <input type="text" name="Surname"/> </b></p>
<input type="image" src="grey.png" alt="Class your friends" style="height:68px;width:68px;margin:0;margin-top:-9px;"/>
</div>
</form>


<div class="classfinder">
<div class="searchbox">
<ul>
<div class="searchboxclasswidth" onClick="return !!(classFunction() & changeColor1())"><li><p id="findclass"><a href><b>Find a class </b></a></p></li></div>
<div class="searchboxcoursewidth" onClick="return !!(courseFunction() & changeColor2())"><li><p><a href><b>Find a course</b></a></p></li></div>
<div style="display:inline"><span id="changeline1"></span><span id="changeline2"><hr size="2" color="white" style="margin-top:0;width:99%"></span></div>
</ul>


<p id="class" style="text-align:center"></p>
</div>
</div>
<script>

function classFunction() {

        document.getElementById("class").innerHTML ='<form name="class" action="classes.php" method="post"><table style="width:100%"><tr><td><p text-align="center" style="font-size:14px;margin-top:-3px"><b> Programme:</b></p></td><td><p text-align="center" style="font-size:14px"><b> Class:<b></p></td></tr><tr><td> <input type="text" name="Programme"/><p id="programmeError"></p></td><td><input type="text" name="Class"/><p id="classError"></p></td></tr><tr><td colspan="2"><p text-align="center" style="font-size:14px"><b> Year: </b></p></td></tr><tr><td colspan="2"> <input type="text" name="Year" style="width:50%"/> <p id="yearError"></p></td><td></td></tr></table><input type="submit" value="Find" style="position:center;border-radius:15px;font:calibri;width:60%;margin-top:5px"></form>';
	return false;
        }
        function changeColor1() {
        document.getElementById("changeline2").innerHTML = '<hr size="2" color="white" style="margin-top:-10px;margin-left:84px;width:49%">';
        document.getElementById("changeline1").innerHTML = '<hr size="2" color="#064034" style="margin-top:0px;margin-left:0px;width:47.5%">';
        return true;
        }
        
        function courseFunction() {

        document.getElementById("class").innerHTML ='<form name="course" action="courses.php" method="post"><p text-align="center" style="font-size:14px"><b> Course:</b></p><input type="text" name="Course"/> <p id="courseError"><input type="submit" value="Find" style="position:center;border-radius:15px;font:calibri;width:60%;margin-top:5px"></form>';
	return false;
        }
        function changeColor2() {
        document.getElementById("changeline1").innerHTML = '<hr size="2" color="white" style="margin-top:0px;margin-left:0px;width:49%">';
        document.getElementById("changeline2").innerHTML = '<hr size="2" color="#064034" style="margin-top:-10px;margin-left:88px;width:47.5%">';
        return true;
        }
</script>




</body>
</html>