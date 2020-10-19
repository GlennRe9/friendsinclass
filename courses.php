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
h1 {color:white; font-family:calibri; text-align:center; font-size:35px}
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
        width: 300px;
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
                filter: alpha(opacity=85);
                background-color:#246045;
                background: rgba(36, 96, 70, 0.85);
                color:white;
                
    }
.container input {
        width: 90%;
        clear: both;
	text-align: center;
        
}
.scroll {
overflow:scroll;
position: center;
          text-align: left;
          margin-left: auto;
	  margin-right: auto;
          margin-bottom:auto;
          margin-top:-13px;
          font-color:black;         
          width: 280px;
          height: 310px;
          border-style:solid;
          border-radius: 15px;
          border-color:#064034;      
          border-radius: 12px; 
          filter: alpha(opacity=100);
          background-color:white;
          opacity: 0.85;
}
#scrollp {
color:black;
font-size:14px;
}
::-webkit-scrollbar{
    width: 16px;
    height: 10px;
    margin-right:2px;
    border-radius:20px;
}
::-webkit-scrollbar-track{
    -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.3);
    border: 1px solid black;
    background: rgb(41,41,41);
    border-radius: 30px;
    margin-right:2px;
}
::-webkit-scrollbar-thumb{
    border-radius:20px;
    height: 30px;
    width: 8px;
    border: 1px solid black;
    background: rgb(111,111,111);
    -webkit-box-shadow: 0 1px 1px rgb(0,0,0);
    background: -webkit-linear-gradient(rgb(200,200,200), rgb(150,150,150));
}
::-webkit-scrollbar-track-piece {
    height: 30px;
    width: 30px;
    border-radius:20px;
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

.classfinder {
        width: 170px;
        height: 140px;
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

<div id='wrapper' style='text-align: center !important;'>
<div class="container" style="display: inline-block;vertical-align: top">

<p><b>You just lookep up the course <br> <?php print($_POST['Course']); ?><br><br> </p>
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
        
        $value1 = mysql_real_escape_string($_POST['Course']);
        $value2 = mysql_real_escape_string($_POST['Programme']);
        $value3 = mysql_real_escape_string($_POST['Class']);
         
        
        $SQL = "SELECT Name, Surname FROM Students WHERE (Course1 =  '$value1' OR Course2 = '$value1' OR Course3 = '$value1' OR Course4 = '$value1') ";
        
        $result = mysql_query($SQL);
        
        if (!$result) { 
    die('Invalid query: ' . mysql_error());
}

$null = '';
if(mysql_num_rows($result)) {
  $i =1;
  echo "<ol type='1' style='list-style-type:none;margin-left:-35px;text-align:center;'>";  // Start the list only if data exist
  while ($row=mysql_fetch_array($result)) {
    if($row["Class"]!=$null) {  // If 'Date' is equal to the previous one, skip
      if($null!='') {  // If it's not the first list 
        echo "</ol><ol type='1'>";   // close the previous one and start another
      } 
    }
    
    echo "<li><p>".$i . " " . stripslashes($row["Name"]). " " . stripslashes($row["Surname"])."</li></p>";
    $i = $i +1;
  }
  
  echo "</ol>";

}
?>

</div>

<div class="container" style="display: inline-block;vertical-align: top">

<p><b>These are the comments on <?php print($_POST['Course']); ?>:<br><br> </p>

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
        
        $value1 = mysql_real_escape_string($_POST['Course']);
        $value2 = mysql_real_escape_string($_POST['Programme']);
        $value3 = mysql_real_escape_string($_POST['Class']);
         
        
        $SQL = "( SELECT Comment1 as id1 FROM Students WHERE Course1='$value1' )
UNION ALL
    ( SELECT Comment2 as comment id2 Students WHERE Course2='$value1' )
UNION ALL
    ( SELECT Comment3 as comment FROM Students WHERE Course3='$value1' )
UNION ALL
    ( SELECT Comment4 as comment FROM Students WHERE Course4='$value1' )";
        
        $result = mysql_query($SQL);
        
        if (!$result) { 
    die('Invalid query: ' . mysql_error());
}

$null = '';
if(mysql_num_rows($result)) {
  $i =1;
  echo "<div class='scroll'><ol type='1' style='list-style-type:none;margin-left:-35px;text-align:center;'>";  // Start the list only if data exist
  while ($row=mysql_fetch_array($result)) {
    if($row["Class"]!=$null) {  // If 'Date' is equal to the previous one, skip
      if($null!='') {  // If it's not the first list 
        echo "</ol><ol type='1'>";   // close the previous one and start another
      } 
    }
    
    echo "<li><p id='scrollp'>".$i . " " . stripslashes($row["Comment"]). " " . stripslashes($row["Comment2"]). " " . stripslashes($row["Comment3"]). " " . stripslashes($row["Comment4"]). " " . stripslashes($row["Programme"]). " " . stripslashes($row["Class"])."</li></p>";
    $i = $i +1;
  }
  
  echo "</ol></div>";

}
?>
</div>
</div>


</body>
</html>