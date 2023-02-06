<?php
//Ideally this function suppose to fetch data from database
//But for simplicity, we are going to use a simple json file
function getBooksData() {
    $json = file_get_contents('data.json');
    return json_decode($json);
}

$books = getBooksData();
echo json_encode(array("data" => $books));