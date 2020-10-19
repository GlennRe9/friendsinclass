<?php
session_start();
    if(!$_SESSION['loggedin'])
    {
    	header("location:index.html?problem=notLoggedin");
        exit;
    }
    $id = $_SESSION['id'];
    $name    = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $email   = $_SESSION['email'];
    $profile = $_SESSION['profile'];
    $course1 = $_SESSION['course1'];
    $course2 = $_SESSION['course2'];
    $course3 = $_SESSION['course3'];
    $course4 = $_SESSION['course4'];
    $comment1 = $_SESSION['comment1'];
    $comment2 = $_SESSION['comment2'];
    $comment3 = $_SESSION['comment3'];
    $comment4 = $_SESSION['comment4'];
    
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
.container {
        width: 510px;
        height: 380px;
        clear: both;
		text-align: left;
		margin-left: auto;
                margin-top:2px;
		margin-right: auto;
                margin-bottom:auto;
                border-style:solid;
                border-radius: 15px;
		border-color:#064034;
		border-width:medium;
                zoom: 1;
                background: rgba(36, 96, 70, 0.87);
                /*filter: alpha(opacity=85);
                opacity: 0.85;*/
                color:white;
                padding-top: 2px;
          padding-right: 7px;
          padding-bottom: 7px;
          padding-left: 7px;
                
    }
.container input {
        width: 70%;
	text-align: left; 
    }
.container p {
        text-align: left;
        font-size:14px;
    }
#submit {
width: 50px;
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
p.scrollwelcome {
	color:white;
        margin-top: 2px;
}
p.scrollviewed {
	color:white;
        margin-top: -6px;
        line-height:0.8em;
}
.mainpar {
          position: center;
          text-align: left;
          margin-left: auto;
	  margin-right: auto;
          margin-bottom:auto;
          padding-top: 2px;
          padding-right: 7px;
          padding-bottom: 7px;
          padding-left: 7px;
          width: 510px;
          height: 90px;
          border-style:solid;
          border-radius: 15px;
          border-color:#064034;      
          border-radius: 15px; 
          background: rgba(36, 96, 70, 0.90);
          opacity: 0.85;
          margin-top: 2px;
          
}
.scroll {
          position: center;
          text-align: left;
          margin-left: auto;
	  margin-right: auto;
          margin-bottom:auto;
          padding-top: 2px;
          padding-right: 7px;
          padding-bottom: 7px;
          padding-left: 7px;
          width: 480px;
          height: 75px;
          border-style:solid;
          border-radius: 15px;
          border-color:#064034;      
          border-radius: 12px; 
          filter: alpha(opacity=100);
          background-color:black;
          opacity: 0.85;
          margin-top: 2px;
          overflow: auto;             
}
#comment1 {
        width: 140px;
        height: 140px;
        clear: both;
        text-align: left;
        margin-left: auto;
        margin-top:2px;
        margin-right: auto;
        margin-bottom:auto;
        border-style:solid;
        border-radius: 15px;
        border-color:#064034;
        border-width:medium;
        zoom: 1;
        background: rgba(36, 96, 70, 0.87);
        /*filter: alpha(opacity=85);
        opacity: 0.85;*/
        color:white;
        padding-top: 2px;
        padding-right: 7px;
        padding-bottom: 7px;
        padding-left: 7px;
        visibility:hidden;
    }
#comment2 {
        width: 140px;
        height: 140px;
        clear: both;
        text-align: left;
        margin-left: auto;
        margin-top:2px;
        margin-right: auto;
        margin-bottom:auto;
        border-style:solid;
        border-radius: 15px;
        border-color:#064034;
        border-width:medium;
        zoom: 1;
        background: rgba(36, 96, 70, 0.87);
        /*filter: alpha(opacity=85);
        opacity: 0.85;*/
        color:white;
        padding-top: 2px;
        padding-right: 7px;
        padding-bottom: 7px;
        padding-left: 7px;   
        visibility:hidden;
    }
#comment3 {
        width: 140px;
        height: 140px;
        clear: both;
        text-align: left;
        margin-left: auto;
        margin-top:2px;
        margin-right: auto;
        margin-bottom:auto;
        border-style:solid;
        border-radius: 15px;
        border-color:#064034;
        border-width:medium;
        zoom: 1;
        background: rgba(36, 96, 70, 0.87);
        /*filter: alpha(opacity=85);
        opacity: 0.85;*/
        color:white;
        padding-top: 2px;
        padding-right: 7px;
        padding-bottom: 7px;
        padding-left: 7px;
        visibility:hidden;
    }
#comment4 {
        width: 140px;
        height: 140px;
        clear: both;
        text-align: left;
        margin-left: auto;
        margin-top:2px;
        margin-right: auto;
        margin-bottom:auto;
        border-style:solid;
        border-radius: 15px;
        border-color:#064034;
        border-width:medium;
        zoom: 1;
        background: rgba(36, 96, 70, 0.87);
        /*filter: alpha(opacity=85);
        opacity: 0.85;*/
        color:white;
        padding-top: 2px;
        padding-right: 7px;
        padding-bottom: 7px;
        padding-left: 7px;
        visibility:hidden;
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
.mainpar p {
          text-align:left;         
}
#formprofile{display:none;}
#formcourse1{display:none;}
#formcourse2{display:none;}
#formcourse3, #formcourse4 {display:none;}
table {
padding:0;
width:100%;
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

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxprofile").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "profile.php", 
      data: data,
      success: function(data) {
        $("#editprofile").html(
          data["profile"] 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcourse1").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "course1.php", 
      data: data,
      success: function(data) {
        $("#editcourse1").html(
          data["course1"] 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcourse2").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "course2.php", 
      data: data,
      success: function(data) {
        $("#editcourse2").html(
          data["course2"] 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcourse3").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "course3.php", 
      data: data,
      success: function(data) {
        $("#editcourse3").html(
          data["course3"] 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcourse4").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "course4.php", 
      data: data,
      success: function(data) {
        $("#editcourse4").html(
          data["course4"] 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcomment1").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "comment1.php", 
      data: data,
      success: function(data) {
        $("#comment1p").html(
          "Saved!" 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcomment2").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "comment2.php", 
      data: data,
      success: function(data) {
        $("#comment2p").html(
          "Saved!" 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcomment3").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "comment3.php", 
      data: data,
      success: function(data) {
        $("#comment3p").html(
          "Saved!" 
        );

        
      }
    });
    return false;
  });
});
</script>
<script type="text/javascript">
$("document").ready(function(){
  $(".ajaxcomment4").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "comment4.php", 
      data: data,
      success: function(data) {
        $("#comment4p").html(
          "Saved!" 
        );

        
      }
    });
    return false;
  });
});
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
                <div id="myaccount"><p style="line-height:15px; margin-top:0px;font-size:13px"><a href="myfriendsinclass.php" class="filldiv" style="background-color:#A8B1A9"><b>My<br> Friends in class</b></a></p></div>
                <div id="logout"><p style="text-align:right;margin-right:5px;font-size:13px"><b> Hello <?php print($name); ?> </b></p></div> 
        </div>    
    </li>                                                                                  
   
  </ul>
</div>  
</nav>

<p class="quote"><i><quote> "University's like this little world, a bubble of time separate from everything before and everything after."</quote> </i></p>

<div class="mainpar">
<div  class="scroll">
<p class="scrollwelcome"><b> Hello <?php print($name); ?>.<br></b></p>
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
        
        
        $SQL = "SELECT Programme, Class, Year FROM Students WHERE  `Students`.`Student_ID` in (SELECT Studentsearched FROM SearchStudent WHERE Studentsearching = '$id' )";
        $result = mysql_query($SQL);
        
        
        while($row = mysql_fetch_assoc($result)) { 
                  
                  $search =   $row['Class'];
                  $search2 = $row['Programme'];
                  $search3 = $row['Year'];  
                ?>
                <p class="scrollviewed"><b>One friend from <?php print($search2 . " Class " . $search . " Year " . $search3 ); ?> 
                viewed you </b></p>
                
                <?php      
              
}

               
?>
        

</div>
</div>
<div id='wrapper' style='text-align: center !important; margin-right:0%'>
<div class="container" style="display: inline-block;vertical-align: top">
<table >
<tr>
<td style="width:90px;padding:0px; margin:0px;"><p><b>Full name:</b></td>
<td><p><?php print($name); ?> <?php print($surname); ?></p><p id="hey"><p></td>
<td></td>
</tr>
<tr>
<td><p><b>My Facebook profile:</b></td>
<td><p id="editprofile"><?php print($profile); ?><form action="return.php" onsubmit="hideform()" class="ajaxprofile" method="post" id="formprofile" style="width:84%"><input type="text" name="profile"/><input type="submit" name="submit" value="Save" style="width:15%;margin-left:5px"></form></p></td>
<td><p onclick="return showformprofile()" id="editprofileblank"><a href>Edit</a></p></td>
</tr>
</table>
<table >
<tr style="height:4px;padding:0px; margin:0px;">
<td><b>My courses:</b></td>
</tr>
<tr>
<td style="width:90px;padding:0px; margin:0px;"><p><b>Course 1:</b></td>
<td><p id="editcourse1"><?php print($course1); ?><form action="returncourse.php" onsubmit="hideform()" class="ajaxcourse1" method="post" id="formcourse1" style="width:90%"><input type="text" name="course1"/><input type="submit" name="submit" value="Save" style="width:18%;margin-left:3px"></form></p></td>
<td><p onclick="return showformcourse1()"><a href>Edit</a></p></td>
<td style="width:100px;padding:0px; margin:0px;"><p onclick="return commentcourse1()"><a href>Add a comment</a></p></td>
</tr>
<tr>
<td><p><b>Course 2:</b></td>
<td><p id="editcourse2"><?php print($course2); ?><form action="returncourse.php" onsubmit="hideform()" class="ajaxcourse2" method="post" id="formcourse2" style="width:90%"><input type="text" name="course2"/><input type="submit" name="submit" value="Save" style="width:18%;margin-left:3px"></form></p></td>
<td><p onclick="return showformcourse2()"><a href>Edit</a></p></td>
<td style="width:100px;padding:0px; margin:0px;"><p onclick="return commentcourse2()" style="font-size:13px"><a href>Add a comment</a></p></td>
</tr>
<tr>
<td><p><b>Course 3:</b></td>
<td><p id="editcourse3"><?php print($course3); ?><form action="returncourse.php" onsubmit="hideform()" class="ajaxcourse3" method="post" id="formcourse3" style="width:90%"><input type="text" name="course3"/><input type="submit" name="submit" value="Save" style="width:18%;margin-left:3px"></form></p></td>
<td><p onclick="return showformcourse3()"><a href>Edit</a></p></td>
<td style="width:100px;padding:0px; margin:0px;"><p onclick="return commentcourse3()" style="font-size:13px"><a href>Add a comment</a></p></td>
</tr>
<tr>
<td><p><b>Course 4:</b></td>
<td><p id="editcourse4"><?php print($course4); ?><form action="returncourse.php" onsubmit="hideform()" class="ajaxcourse4" method="post" id="formcourse4" style="width:90%"><input type="text" name="course4"/><input type="submit" name="submit" value="Save" style="width:18%;margin-left:3px"></form></p></td>
<td><p onclick="return showformcourse4()"><a href>Edit</a></p></td>
<td style="width:100px;padding:0px; margin:0px;"><p onclick="return commentcourse4()" style="font-size:13px"><a href>Add a comment</a></p></td>
</tr>
</table>
</div>

<div id="comment1" style="position:absolute;display: inline-block;vertical-align: top;margin-top:150px;margin-left:5px">
<form class="ajaxcomment1" method="post"><textarea cols="16" rows="7" name="comment1" style="margin-top:5px"><?php print(stripslashes($comment1)); ?></textarea><input type="submit" value="Save" style="float:right;margin-left:2px;border-radius:10px"></form><p id="comment1p" style="margin-top:2px"></p>
</div>
<div id="comment2" style="position:absolute;display: inline-block;vertical-align: top;margin-top:180px;margin-left:5px">
<form class="ajaxcomment2" method="post"><textarea cols="16" rows="7" name="comment2" style="margin-top:5px"><?php print(stripslashes($comment2)); ?></textarea><input type="submit" value="Save"style="float:right;margin-left:2px;border-radius:10px"></form><p id="comment2p" style="margin-top:2px"></p>
</div>
<div id="comment3" style="position:absolute;display: inline-block;vertical-align: top;margin-top:210px;margin-left:5px">
<form class="ajaxcomment3" method="post"><textarea cols="16" rows="7" name="comment3" style="margin-top:5px"><?php print(stripslashes($comment3)); ?></textarea><input type="submit" value="Save" style="float:right;margin-left:2px;border-radius:10px"></form><p id="comment3p" style="margin-top:2px"></p>
</div>
<div id="comment4" style="position:absolute;display: inline-block;vertical-align: top;margin-top:240px;margin-left:5px">
<form class="ajaxcomment4" method="post"><textarea cols="16" rows="7" name="comment4" style="margin-top:5px"><?php print(stripslashes($comment4)); ?></textarea><input type="submit" value="Save" style="float:right;margin-left:2px;border-radius:10px"></form><p id="comment4p" style="margin-top:2px"></p>
</div>
</div>

<script>
function showformprofile() {
    document.getElementById("formprofile").style.display = 'block';
    document.getElementById("editprofile").innerHTML = "";
    return false;
}
function showformcourse1() {
    document.getElementById("formcourse1").style.display = 'block';
    document.getElementById("editcourse1").innerHTML = "";
    return false;
}
function showformcourse2() {
    document.getElementById("formcourse2").style.display = 'block';
    document.getElementById("editcourse2").innerHTML = "";
    return false;
}
function showformcourse3() {
    document.getElementById("formcourse3").style.display = 'block';
    document.getElementById("editcourse3").innerHTML = "";
    return false;
}
function showformcourse4() {
    document.getElementById("formcourse4").style.display = 'block';
    document.getElementById("editcourse4").innerHTML = "";
    return false;
}
function hideform() {
    document.getElementById("formprofile").style.display = 'none';
    document.getElementById("formcourse1").style.display = 'none';
    document.getElementById("formcourse2").style.display = 'none';
    document.getElementById("formcourse3").style.display = 'none';
    document.getElementById("formcourse4").style.display = 'none';
    return false;
}
</script>

<script>
function commentcourse1() {
var div = document.getElementById('comment1');
div.style.visibility = 'visible';
document.getElementById('comment2').style.visibility = 'hidden';
document.getElementById('comment3').style.visibility = 'hidden';
document.getElementById('comment4').style.visibility = 'hidden';
return false;
}
</script>
<script>
function commentcourse2() {
var div = document.getElementById('comment2');
div.style.visibility = 'visible';
document.getElementById('comment1').style.visibility = 'hidden';
document.getElementById('comment3').style.visibility = 'hidden';
document.getElementById('comment4').style.visibility = 'hidden';
return false;
}
</script>
<script>
function commentcourse3() {
var div = document.getElementById('comment3');
div.style.visibility = 'visible';
document.getElementById('comment1').style.visibility = 'hidden';
document.getElementById('comment2').style.visibility = 'hidden';
document.getElementById('comment4').style.visibility = 'hidden';
return false;
}
</script>
<script>
function commentcourse4() {
var div = document.getElementById('comment4');
div.style.visibility = 'visible';
document.getElementById('comment1').style.visibility = 'hidden';
document.getElementById('comment2').style.visibility = 'hidden';
document.getElementById('comment3').style.visibility = 'hidden';
return false;
}
</script>
</body>
</html>