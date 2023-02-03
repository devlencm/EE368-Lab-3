<?php

require 'C:\xampp\htdocs\vendor\autoload.php';
Mustache_Autoloader::register();
//Ideally this function suppose to fetch data from database
//But for simplicity, we are going to use a simple json file
function getBooksData() {
    $json = file_get_contents('data.json');
    return json_decode($json);
}

$books = getBooksData();

$loader = new Mustache_Loader_FilesystemLoader(__DIR__);
$mustache = new Mustache_Engine(
    [
        'loader' => $loader
    ]
    );
echo $mustache->render('page');
echo $mustache->render('books');
?>

