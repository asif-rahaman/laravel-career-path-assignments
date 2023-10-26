<?php
$book_title = 'Title';
$book_id = '1234';;
$book_author_name = 'Book author';


function addBooksToLibrary(){

    $library_books = [];
    array_push($library_books,'$book_title,$book_id,$book_author_name');
}

$library=addBooksToLibrary();
?>
<pre><?php $library ?></pre>