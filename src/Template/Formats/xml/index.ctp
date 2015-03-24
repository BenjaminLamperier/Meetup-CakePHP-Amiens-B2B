<?php

$xml = Xml::fromArray(['response' => $formats]);
echo $xml->asXML();