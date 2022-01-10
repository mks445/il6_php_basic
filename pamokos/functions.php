<?php
//$userEmail = "belekas@beleka.lt";
//if(isEmailValid($userEmail)){
//    echo clearEmail($userEmail);
//}else{
//    echo 'Emailas nevalidus';
//}
//function isEmailValid($email){
//    if (str_contains($email, '@')) {
//        return true;
//    }
//    return false;
//}
//function clearEmail($email){
//    $emailLowercases = strtolower($email);
//    return trim($emailLowercases);
//}
//
//
//$name


//$name = 'Marius';
//$surname = 'Kuprys';
//function getNickName($name, $surname){
//    return substr($name, 0, 3) . substr($surname, 0,3);
//
//}
//         echo getNickName($name, $surname);

$title = 'Jusu kaskokia tai antraste';
//$slug = getSlug($title);

function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}
echo create_slug($title);