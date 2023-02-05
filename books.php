<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>List of Books</title>
</head>
<div class="header mt-5 mb-5">
    <h1 class="h1">100 Books of All Time</h1>
    <p>
        This page to see the 100 best classical books of all time.
    </p>
</div>
<?php
//Ideally this function suppose to fetch data from database
//But for simplicity, we are going to use a simple json file
function getBooksData() {
    $json = file_get_contents('data.json');
    return json_decode($json);
}

$books = getBooksData();
require_once('Mustache/Autoloader.php');
Mustache_Autoloader::register();

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(__DIR__)
));
echo $mustache->render('page');
foreach ($books as $book):
    echo $mustache->render('books', array('title' => $book->{'title'},
        'author' => $book->{'author'},
        'country' => $book->{'country'},
        'imageLink' => $book->{'imageLink'},
        'language' => $book->{'language'},
        'link' => $book->{'link'},
        'pages' => $book->{'pages'},
        'year' => $book->{'year'},)); // "Hello, World!";
endforeach
?>
