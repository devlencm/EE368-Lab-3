
src="https://unpkg.com/mustache"
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"

$( document ).ready(function() {
    fetchData();
});

function fetchData() {
    $.getJSON( "service.php", function( resp ) {
        // Log each key in the response data
        $.each( resp, function() {
            console.log(resp['data']);
            renderBooks(resp['data']);
        });
    });
    // Using the core $.ajax() method
    //var $target=$("#target");

}
function renderBooks(booksData) {
    fetch('books.mustache')
        .then((response) => response.text())
        .then((template) => {
            document.getElementById('target').innerHTML = Mustache.render(template, {books: booksData});
        });
}
