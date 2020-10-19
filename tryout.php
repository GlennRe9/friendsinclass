<?php
session_start();
    if(!$_SESSION['loggedin'])
    {
      header("location:index.html?problem=notLoggedin");
        exit;
    }
    $name = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $profile = $_SESSION['profile'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="En-US">
<head>


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
        width: 460px;
        height: 450px;
        clear: both;
    text-align: left;
    margin-left: auto;
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
        width: 50%;
  text-align: left;    
    }
.container p {
        text-align: left;    
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
a:link {color:green;}
a:visited {color:white}
a:hover {color:grey}

a {
text-decoration:none;
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
          width: 460px;
          height: 90px;
          border-style:solid;
          border-radius: 15px;
          border-color:#064034;      
          border-radius: 15px; 
          filter: alpha(opacity=85);
          background-color:#246045;
          opacity: 0.85;
          margin-top: 2px;
          
}
.mainpar p {
          text-align:left;         
}
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
                <div id="myfriendsinclass"><p style="line-height:45px; margin-top:0px;font-size:13px"><b><a href="myaccount.php" class="filldiv" style="background-color:#A8B1A9"> My account</a></b></p></div>
                <div id="myaccount"><p style="line-height:15px; margin-top:0px;font-size:13px"><a href="myfriendsinclass.php" class="filldiv" ><b>My<br> Friends in class</b></a></p></div>
                <div id="logout"><p style="text-align:right;margin-right:5px;font-size:13px"><b> Hello <?php print($name); ?> </b></p></div> 
        </div>    
    </li>                                                                                  
   
  </ul>
</div>  
</nav>

<p class="quote"><i><quote> "University's like this little world, a bubble of time separate from everything before and everything after."</quote> </i></p>

<form name="passwordform" method="post" onsubmit="return passwordCheck()">
<div class="container">
<table>
<tr>
<td style="width:100px"><p><b>My email:</b></td>
<td><p><?php print($email); ?></p></td>
<td></td>
</tr>
<tr>
<td><p><b>My password:</b></td>
<td><p id="editpassword"></p><p id="insertpassword"><input type="password" name="inputedPassword" value="<?php print($password); ?>"/></p></td>
<td><p onclick="return editpasswordfunction()"><a href>Edit</a></p></td>
</tr>
<tr>
<td><p><b>My new password:</b></td>
<td><p id="equalpasswords1"></p><input type="password" name="Password1"/></td>
<td></td>
</tr>
<tr>
<td><p><b>Confirm password:</b></td>
<td><p id="equalpasswords2"></p><input type="password" name="Password2"/> <input type="Submit" value="Save"></td>
<td></td>
</tr>
</table>
</form>

<script>
function editpasswordfunction() {
    document.getElementById("insertpassword").innerHTML = '<form><input type="password" name="inputedPassword" placeholder="Insert your old password"/></form>';
    return false;    
}
</script>
<script type="text/javascript">

function validatePassword() {

if (document.passwordform.inputedPassword.value == "" || document.passwordform.Password1.value == "" || document.passwordform.Password2.value == "" )
      {  
        if ( document.passwordform.inputedPassword.value == "")
            {
            text = "Please fill in with your password";
            document.getElementById("editpassword").innerHTML = text;             
            }
         
         if ( document.passwordform.Password1.value == "")
            {
            text = "Please fill in with your password";
            document.getElementById("equalpasswords1").innerHTML = text;   
            }
         if ( document.passwordform.Password2.value == "")
            {
            text = "Please fill in with your password";
            document.getElementById("equalpasswords2").innerHTML = text; 
            }   
       }
return true;
}


function blankPassword() {

        if ( document.passwordform.inputedPassword.value != "")
            {
            text = "";
            document.getElementById("editpassword").innerHTML = text;
            }
         if ( document.passwordform.Password1.value != "")
            {
            text = "";
            document.getElementById("equalpasswords1").innerHTML = text;
            }  
         if ( document.passwordform.Password2.value != "")
            {
            text = "";
            document.getElementById("equalpasswords2").innerHTML = text;
            
            }  

return true;
}

function passwordCheck() {

        var password = '<?php echo $password; ?>';
        function validatePassword();
        function blankPassword();
        alert("passwordcheck completed");
        
      if (document.passwordform.inputedPassword.value == password)
      {
              if (document.passwordform.Password1.value == document.passwordform.Password2.value)
              {
              
              
              alert("passwords equal form submitted");
                    
              } else 
                 {
                 document.getElementById("equalpasswords1").innerHTML = "Passwords should be equal";
                 document.getElementById("equalpasswords2").innerHTML = "Passwords should be equal";
                 
                 }
              
              } else 
              {
              text = "Insert a correct password";
              document.getElementById("editpassword").innerHTML = text;
              }
      return true;
      }

</script>

</div>




</body>
</html>