<?php

function clearEmail($email)
{
    return trim(strtolower($email));
}

function isEmailValid($email)
{
    return strpos($email, '@') !== false;
}

function isPasswordValid($pass1, $pass2)
{
    return $pass1 === $pass2 && strlen($pass1) > 8;
}

function hashPassword($password)
{
    return md5(md5($password) . 'druska');
}

// name, last nameas, emailas, passwordas.
function writeToCsv($data, $fileName)
{
    $file = fopen($fileName, 'a');
    foreach ($data as $element) {
        fputcsv($file, $element);
    }
    fclose($file);
}


function readFromCsv($fileName)
{
    $data = [];
    $file = fopen($fileName, 'r');
    while (!feof($file)) {
        $line = fgetcsv($file);
        if (!empty($line)) {
            $data[] = $line;
        }
    }
    fclose($file);
    return $data;
}

function debug($data)
{
    echo '<pre>';
    var_dump($data);
    die();
}
