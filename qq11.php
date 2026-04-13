<?php
$doc=new DOMDocument("1.0","UTF-8");

$bookinfo=$doc->createElement("bookinfo");
$doc->appendChild($bookinfo);

$book1=$doc->createElement("book");

$book1->appendChild($doc->createElement("bookno",1));
$book1->appendChild($doc->createElement("bookname","java"));
$book1->appendChild($doc->createElement("authorname","balguru swami"));
$book1->appendChild($doc->createElement("price",250));
$book1->appendChild($doc->createElement("year",2023));

$bookinfo->appendChild($book1);

$book2=$doc->createElement("book");

$book2->appendChild($doc->createElement("bookno",2));
$book2->appendChild($doc->createElement("bookname","php"));
$book2->appendChild($doc->createElement("authorname","balguru"));
$book2->appendChild($doc->createElement("price",270));
$book2->appendChild($doc->createElement("year",2024));

$bookinfo->appendChild($book2);


$doc->formatOutput=true;
$doc->save("book123.xml");

echo "dom created";


?>