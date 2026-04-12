<?php
$xml=new DOMDocument("1.0","UTF-8");

$root=$xml->createElement("bookinfo");
$xml->appendChild($root);

$book1=$xml->createElement("book");

$book1->appendChild($xml->createElement("bookno",1));
$book1->appendChild($xml->createElement("bookname","java"));
$book1->appendChild($xml->createElement("authorname","balguru swami"));
$book1->appendChild($xml->createElement("price",250));
$book1->appendChild($xml->createElement("year",2023));

$root->appendChild($book1);

$book2=$xml->createElement("book");

$book2->appendChild($xml->createElement("bookno",2));
$book2->appendChild($xml->createElement("bookname","php"));
$book2->appendChild($xml->createElement("authorname","balguru"));
$book2->appendChild($xml->createElement("price",270));
$book2->appendChild($xml->createElement("year",2024));

$root->appendChild($book2);


$xml->formatOutput=true;
$xml->save("book.xml");

echo $xml->saveXML();


?>