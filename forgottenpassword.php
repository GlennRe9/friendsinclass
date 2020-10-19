
<!DOCTYPE html>
<html lang="En-US">
<head>
<meta name="author" content="Glenn Regis">
<link rel="icon" type="image/png" href="http://www.friendsinclass.co.nf/tab.png" sizes="16x16" />
<meta charset="UTF-8">
</head>
<title>Friends in class</title>
<style>
h1 {color:white; font-family:"arial"; text-align:center; font-size:35px}

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
width:33.15%;
/*border:solid yellow;*/

}
.id  {
  width: 60px;
  /*border: solid black;*/
  }
  
.no  {
  width: 100%;
  
  /*border: solid black;*/
  
  } 
.hi  {
  width: 100%;
  line-height:20px;
  float:left;
  margin:0px;
  padding: 0 0;
  /*border: solid black;*/
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
.barimage {
width:42px;
height:42px;
border:0;
}    
.bartitle {
font-size:26px;
margin:0;
margin-top:8px;
margin-left:5px;
padding:0
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
a {
text-decoration:none;
}
a:link {color:white;}
a:visited {color:white}
a:hover {color:#A8B1A9}
.mainpar {
          
          
          margin-left: auto;
	  margin-right: auto;
          margin-top: 100px;
          height: 350px;
          width: 350px;
          
          border-style:solid;
          border-radius: 15px;
          border-color:#064034;      
          border-radius: 15px; 
          background-color:#246045;
          background: rgba(36, 96, 70, 0.85);
          /*filter: alpha(opacity=85);
          opacity: 0.85;*/
          
          
}

body
{
background:url(BocconiEntrance3.jpg);
background-size:cover;
}
#form {
	background-color:transparent;
}
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}
</style>

</head>
<body> 


  <nav>
<div class="total">
  <ul>
    <li>
        <div class="id"><a href="index.html">
 <img src="grey.png" alt="Friends in class" class="barimage"></a></div>
    </li>
    <li>
        <div class="no"><p class="bartitle"><b>Friends in class</b></p></div>
    </li>
    <li>
        <div class="hi">

        </div>    
    </li>
   
  </ul>
</div>  
</nav>



<p class="quote"><i><quote> "University's like this little world, a bubble of time separate from everything before and everything after."</quote> </i></p>
<div>



<div class="mainpar">

<?php

define('DB_NAME', '1956218_students');
        define('DB_USER', '1956218_students');
        define('DB_PASSWORD', 'Bizwld_92');
        define('DB_HOST','pdb3.biz.nf');
        
        $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        $db_selected = mysql_select_db(DB_NAME, $link);
        
if($_GET['code'])
        {
                $get_studid = $_GET['studid'];
                $get_code = $_GET['code'];

                $query = mysql_query("SELECT * FROM Students WHERE StudentId = '$get_studid' ");
                
                while($row = mysql_fetch_assoc($query))
                {
                        $db_code = $row['PassReset'];
                        $db_studid = $row['StudentId'];
                }
                if($get_studid == $db_studid && $get_code == $db_code) 
                {
                echo "
                <form action='resetpassword.php?code=$get_code' method='POST'>
                <p>Enter a new password<br><input type='password' name='newpass'></p>
                <p>Re-enter your new password<br><input type='password' name='newpass1'><br></p>
                <input type='hidden' name='studid' value='$db_studid'>
                <p><input type='submit' value='Save password'></p></form>
                ";
                }
               
        }
        
if (!$_GET['code'])
{    
        echo " 
        
        <form action='forgottenpassword.php' method='Post'>
        <p>Enter your University ID<br><input type='text' name='studentid'></p>
        <p>Enter your student email<br><input type='text' name='studentemail'></p>
        <p><input type='submit' value'Submit' name='submit'></p>
        </form>
";


   
if(isset($_POST['submit']))
{
        $studid = $_POST['studentid'];
        $email = strtolower($_POST['studentemail']);
        
        $query = mysql_query("SELECT * FROM Students WHERE StudentID ='$studid'");
        $numrow = mysql_num_rows($query);
        
        if($numrow!=0)
        {
                while($row = mysql_fetch_assoc($query))
                {
                        $dbemail = $row['StudEmail'];
                }
                
                if ($email == $dbemail)
                {
                        $code = rand(10000,1000000);
                        
                        $to = $dbemail;
                        $subject = "Password Reset";
                        $body = "
                        
                        This is an automated email. 
                        
                        Click the link below to reset your password:
                        
                        http://www.thefriendsinclass.com/forgottenpassword.php?code=$code&studid=$studid
                        
                        ";
                        
                mysql_query("UPDATE Students SET PassReset='$code' WHERE StudentId = '$studid' ");
                
                mail($to,$subject,$body);
                
                echo "<p>Thank you, you can now check your email to reset your password</p>";
                }
                else 
                {
                        echo "<p> You inserted the wrong student email!</p>";
                }
        }
        else
        {
                echo "<p>Sorry, that student ID isn't registered</p>";
        }
}
}
?>

</div>




</body>
</html>