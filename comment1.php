<?php
session_start();
    

$email = $_SESSION['email'];


?>


<?php    
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { 
    $action = $_POST["action"];
    switch($action) { 
      case "test": test_function($email); break;
    }
  }
}


function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function($email){
        $return = $_POST;
        $x = $return["comment1"];
        
        
        
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
        
        
        $result = "UPDATE  `1956218_students`.`Students` SET  `Comment1` =  '$x' WHERE  `Students`.`StudEmail` = '$email'  ";
        if (!mysql_query($result)) {
        die('error: ' .mysql_error());
        }
        
        
        $return["json"] = json_encode($return);
  echo json_encode($return);
  
$_SESSION['comment1'] = $x; 
}
?>