<?php
session_start();
    

$email = $_SESSION['email'];


?>


<?php    

        $return = $_POST;
        $x = $_GET["value"];
        

        
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
        
        
        $result = "UPDATE  `1956218_students`.`Students` SET  `Password` =  '$x' WHERE  `Students`.`StudEmail` = '$email'  ";
        if (!mysql_query($result)) {
        die('error: ' .mysql_error());
        }
        
$_SESSION['password'] = $x;         
?>
