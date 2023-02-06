<?php
//Ideally this function suppose to fetch data from database
//But for simplicity, we are going to use a simple json file

require_once('Mustache/Autoloader.php');
Mustache_Autoloader::register();

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(__DIR__)
));
$template = $mustache->loadTemplate('page');
echo $template->render();
?>