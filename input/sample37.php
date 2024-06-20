<?php
require_once "app/shop/sample0.php";
require_once "app/Review/sample0.php";


use input\app\shop\Book;
use input\app\Review\Book as BookReview;


$book = new Book();
echo $book ->getPrice();


$book_review = new BookReview();
echo $book_review->getPoint();