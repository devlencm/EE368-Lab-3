
$( document ).ready(function() {
    fetchData();
});

function fetchData() {
    //TODO: write AJAX code to fetch the data from service.php. On successful response, call renderbooks() and pass the received books data
    // Using the core $.ajax() method
    var $target=$("#target");

    $.ajax({
        url: "service.php",
        dataType: "json",
        success: function(booksData){
            document.getElementById("target").innerHTML = '';
            $.each(booksData, function(i,book){
                $target.append(Mustache.render('{{author}}',book))
            })
        }
    })
}

function renderBooks(booksData) {
    //TODO: use mustache to render booksData and books.mustache into #tarter
}
