<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "editpassword") {
if (strlen($value) < 2) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "equalpasswords1") {
if (strlen($value) < 2) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}
if ($formfield == "equalpasswords2") {
if (strlen($value) < 2) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}

?>
