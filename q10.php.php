<?php
$xml=simplexml_load_file("book.xml");
foreach($xml->books as $b)
{
echo "title of book".$b->book;
echo "year of book".$b->year;
}
?>