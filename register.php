<html>
<head>
<meta name="author" content="Glenn Regis">
<meta charset="UTF-8">
<title>Friends in class</title>
<style>
h1 {color:white; font-family:"calibri"; text-align:center}
p {
	color: white;
	font-family:"calibri", cursive;
	size:100%;
        text-align:center;
	
}

}
p.quote {
	color:white;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif
}
a:link {color:green;}
a:visited {color:white}
a:hover {color:red}


body
{
background:url(BocconiEntrance3.jpg);
background-size: cover;
}
</style>
</head>
<body> 


<h1>Friends in class</h1>

<p class="quote"><i><quote> "University's like this little world, a bubble of time separate from everything before and everything after."</quote> </i></p><br>

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
        $value3 = mysql_real_escape_string($_POST['Email']);
        $value4 = mysql_real_escape_string($_POST['StudId']);
        $value5 = mysql_real_escape_string($_POST['Programme']);
        $value6 = mysql_real_escape_string($_POST['Class']);
        $value7 = mysql_real_escape_string($_POST['Year']);
        $value8 = mysql_real_escape_string($_POST['Profile']);
        $value9 = mysql_real_escape_string($_POST['Password1']);
        $value10 = mysql_real_escape_string($_POST['Course1']);
        $value11 = mysql_real_escape_string($_POST['Course2']);
        $value12= mysql_real_escape_string($_POST['Course3']);
        $value13= mysql_real_escape_string($_POST['Course4']);
        
        
        $sql = "INSERT INTO Students (Name, Surname, StudEmail, StudentId, Programme, Class, Year, Fbprofile, Password, Course1, Course2, Course3, Course4) VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11', '$value12', '$value13')";
        if (!mysql_query($sql)) {
        die('error: ' .mysql_error());
        }
        echo '<p>Congratulations, you just registered at Friends in class!</p>';
                          
		
?>

<a href="index.html"><p align="center"> Click here to log in and check up your friends now!</p></a>

</body>
</html>