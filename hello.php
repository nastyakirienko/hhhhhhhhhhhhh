<?php
$library = array(
    array("title" => "1984", "author" => "George Orwell", "genre" => "dystopian fiction"),
    array("title" => "To Kill a Mockingbird", "author" => "Harper Lee", "genre" => "classic literature"),
    array("title" => "The Hobbit", "author" => "J.R.R. Tolkien", "genre" => "fantasy"),
    array("title" => "The Great Gatsby", "author" => "F. Scott Fitzgerald", "genre" => "modernist literature"),
    array("title" => "Pride and Prejudice", "author" => "Jane Austen", "genre" => "romance")
);

$genre = "fantasy";

foreach ($library as $book) {
    if ($book["genre"] == $genre) {
        echo $book["title"] . " by " . $book["author"] . "<br>";
    }
}
?>





