<?php

$xml = Xml::fromArray(['response' => $beers]);
echo $xml->asXML();