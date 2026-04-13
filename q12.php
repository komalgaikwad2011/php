<?php
$bookinfo=new SimpleXMLElement("<bookinfo/>");

$book=$bookinfo->addchild("book");
$book->addchild("bookno","1");
$book->addchild("bookname","java");
$book->addchild("authorname","swami");
$book->addchild("price","250");
$book->addchild("year","2006");

$book=$bookinfo->addchild("book");
$book->addchild("bookno","2");
$book->addchild("bookname","php");
$book->addchild("authorname","denis");
$book->addchild("price","300");
$book->addchild("year","2005");


$bookinfo->asXml("q12.xml");
echo "q12.xml is created";

?>