<?php
session_start();
    if(!$_SESSION['loggedin'])
    {
    	header("location:index.html?problem=notLoggedin");
        exit;
    }
    $name = $_SESSION['name'];
    $id = $_SESSION['id'];
  
?>
<!DOCTYPE html>
<html lang="En-US">
<head>


<meta name="author" content="Glenn Regis">
<meta charset="UTF-8">
<title>Friends in class</title>
<style>
h1 {color:white; font-family:arial; text-align:center; font-size:35px}

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
width:33.33%;
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
padding:0
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

.searchbox div {
display: inline;

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
   font-size:15px;
  list-style:none;
  text-align:left;
  width:100%;
  
  font-family: 'arial';
}

.container {
        width: 30%;
        height: 400px;
        
		text-align: center;
		margin-left: auto;
		margin-right: auto;
                margin-bottom:auto;
                border-style:solid;
                border-radius: 15px;
		border-color:#064034;
		border-width:medium;
                zoom: 1;
                background-color:#246045;
                background: rgba(36, 96, 70, 0.90);
                color:white;
                
    }
.container input {
        width: 90%;
        clear: both;
	text-align: center;
        
    }
  
p {
	color: white;
	font-family:"arial";
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
<?php

	define('DB_NAME', '1956218_students');
        define('DB_USER', '1956218_students');
        define('DB_PASSWORD', 'Bizwld_92');
        define('DB_HOST','pdb3.biz.nf');
        
        $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        
        if (!link) {
                die('Could not connect: ' . mysql_error());
        }
        
        $db_selected = mysql_select_db(DB_NAME, $link);
        
        if (!$db_selected) {
                die('Can\'t use'. DB_NAME. ': ' . mysql_error());
        }
        
        $value1 = mysql_real_escape_string($_POST['Name']);
        $value2 = mysql_real_escape_string($_POST['Surname']);
         
        
        $SQL = "SELECT Course1, Course2, Course3, Course4, Student_ID, Fbprofile FROM Students WHERE Name=  '$value1' AND Surname= '$value2'";
       
        $result = mysql_query($SQL);
        
        if (!$result) { 
    die('Invalid query: ' . mysql_error());
}

?>
<br>
<div class="container">

<p><b>
<?php 

if (mysql_num_rows($result)== 0 && ($value1 != "" && $value2 != "")) {

                echo "We are sorry, " . $value1 . " " . $value2 . " doesn't seem to be registered with Friends in class.<br><br>";
                echo "You could also check if you spelt the name correctly, by <a href='welcome.php'> going back!</a>";
                
                }
                
if ($value1 == "" | $value2 == "") {

                echo "We are sorry, but you will need to provide both a name and a surname.<br>";
                echo "<a href='welcome.php'><br> Click here to go back</a>";
                
                }
if (mysql_num_rows($result) != 0 && ($value1 != "" && $value2 != ""))                  
                {
                echo "You just Friends in classed <br>" . stripslashes($value1). " " . stripslashes(stripslashes($value2)) . "<br><br>" . $value1. " " . stripslashes(stripslashes($value2)) ." is currently enrolled in:</b></p>";
                }
?> </b></p>
<?php while($row = mysql_fetch_array($result)) { 
                  $Course1 = $row["Course1"];
                  $Course2 = $row["Course2"];
                  $Course3 = $row["Course3"];
                  $Course4 = $row["Course4"];
                  $searchedid = $row["Student_ID"];
                  $profile = $row["Fbprofile"];
                  }
                  $SQL1 = "INSERT INTO SearchStudent (Studentsearched, Studentsearching) VALUES ('$id','$searchedid')";
                  $result = mysql_query($SQL1);
?>
<table style="width:100%">
    <tr>
    <td><p style="line-height:10px"> <?php print ($Course1); ?> </p>
    </td>
    </tr>
    
    <tr>
    <td><p style="line-height:10px"> <?php print ($Course2); ?> </p>
    </td>
    </tr>
    
    <tr>
    <td><p style="line-height:10px"> <?php print ($Course3); ?> </p>
    </td>
    </tr>
    
    <tr>
    <td><p style="line-height:10px"> <?php print ($Course4); ?> </p>
    </td>
    </tr>
    
    <tr>
    <td><p style="line-height:15px"><?php echo stripslashes($value1) . "'s profile can be found here: <br><a href='".$profile."' target='_blank'>" . $profile . "</a>"; ?> </p>
    </td>
    </tr>
</table>
</div>

<br><br><p style="margin-left:1180px; margin-top:-10px">A Glenn Regis production</p>

</body>
</html>