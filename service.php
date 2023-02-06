<?php
function getBooksData() {
    $json = file_get_contents('data.json');
    return json_decode($json);
}

$books = getBooksData();
echo json_encode(array("data" => $books));