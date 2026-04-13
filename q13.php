<?php

$xml=simplexml_load_file("q12.xml");
foreach($xml->book as $b)
{

        echo "<h3>book details</h3>";
        echo "title:".$b->bookname."<br>";
        echo "author:".$b->authorname."<br>";
         echo "year:".$b->year."<br>";
        echo "price:".$b->price."<br>";
    
}
?>