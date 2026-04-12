<?php
$dom=new DomDocument();
$dom->load("movies.xml");
$name=$dom->getElementsByTagName("actorname");
$title=$dom->getElementsByTagName("movietitle");
foreach($name as $a)
    {
        echo "actor name is:".$a->textContent."<br>";
    }
    foreach($title as $b)
        {
        echo "title is:".$b->textContent."<br>";

        }
?>