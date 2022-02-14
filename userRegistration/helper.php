<?php
$email = $_POST["email"];
function clearEmail($email)
{
    $email = trim($email);
    $email = strtolower($email);
    return $email;
}

function checkorEmailValid($email)
{
    if (strpos($email, '@')) {
        return true;
    } else {
        return false;
    }
}

$email = clearEmail($email);
if (checkorEmailValid($email)) {
    $file = fopen('emails.csv', 'a');

}
function writeToCsv($data, $fileName)
{
    $file = fopen('emails.csv', 'a');
    foreach ($data as $element) {
        fputcsv($file, $element);
    }
    fclose($file);
}

