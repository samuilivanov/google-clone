<?php

include ("classes/DomDocumentParser.php");

function followLinks($url)
{
  $parser = new DomDocumentParser($url);

  $linkList = $parser->getLinks();

  foreach ($linkList as $link) {
    $href = $link->getAttribute("href");
    echo $href . "<br>";
  }
}

$startlUrl = "http://www.apple.com";
followLinks($startlUrl);

?>
