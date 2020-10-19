<?php
session_start();

$enteredEmail = strtolower($_POST['inputedEmail']);
$enteredPassword = $_POST['inputedPassword'];

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
        
              
        $query = mysql_query("SELECT * FROM Students WHERE StudEmail = '$enteredEmail'");
        $numrows = mysql_num_rows($query);
        
        if($numrows!==0)
        {
                while($row=mysql_fetch_assoc($query))
                {
                 $dbid = $row['Student_ID'];
                 $dbemail = $row['Email'];
                 $dbpassword = $row['Password'];
                 $dbname = $row['Name'];
                 $dbsurname = $row['Surname'];
                 $dbprofile = $row['Fbprofile'];
                 $dbemail = $row['StudEmail'];
                 $dbpassword = $row['Password'];
                 $dbcourse1 = $row['Course1'];
                 $dbcourse2 = $row['Course2'];
                 $dbcourse3 = $row['Course3'];
                 $dbcourse4 = $row['Course4'];
                 $dbcomment1 = $row['Comment1'];
                 $dbcomment2 = $row['Comment2'];
                 $dbcomment3 = $row['Comment3'];
                 $dbcomment4 = $row['Comment4'];
                 
                }
                
                if($enteredEmail==$dbemail&&($enteredPassword==$dbpassword))
                {
                     
                $_SESSION['loggedin'] = "YES";
                $_SESSION['id'] = $dbid;  
                $_SESSION['name'] = $dbname;
                $_SESSION['surname'] = $dbsurname;
                $_SESSION['profile'] = $dbprofile;
                $_SESSION['email'] = $dbemail;
                $_SESSION['password'] = $dbpassword;
                $_SESSION['course1'] = $dbcourse1;
                $_SESSION['course2'] = $dbcourse2;
                $_SESSION['course3'] = $dbcourse3;
                $_SESSION['course4'] = $dbcourse4;
                $_SESSION['comment1'] = $dbcomment1;
                $_SESSION['comment2'] = $dbcomment2;
                $_SESSION['comment3'] = $dbcomment3;
                $_SESSION['comment4'] = $dbcomment4;
                
                $url = "Location:welcome.php";
                header($url);
                exit;
                }
                
        }
        
        
        $problem="";
        
        if ($enteredEmail == $databaseEmail && $enteredPassword != $databasePassword)
        
        {
                $problem="invalidPassword";
        }
        
        if ($enteredEmail != $databaseEmail)
        
        {
                $problem = "invalidUser";
        }
        
        $url ="Location: index.html?problem=$problem";
        header($url);
        exit;
        
?>
