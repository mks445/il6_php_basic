<?php
//$email = $_POST['user_email'];
//function isEmailValid($email)
//{
//    //if (strpos($email, needle: '@')) {
//    //return true;
//else{
//    return false;
//}
//}

//if (isEmailValid($email)) ;
//{
//    echo 'emailas geras';
//} else{
//    echo 'negerai kazkas;/';
$x = $_POST['x'];
$y = $_POST['y'];
$operator = $post['operator'];

switch ($operator) {
    case '+':
        echo $x + $y;
        break;
    case '-':
        echo $x - $y;
        break;
    case '*':
        echo $x * $y;
        break;
    case '/':
        echo $x / $y;
        break;
}
if ($_POST) {
    echo $_POST["skaicius1"] + $_POST["skaicius2"];


}

