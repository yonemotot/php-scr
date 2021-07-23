<?php

require_once("./phpQuery-onefile.php");

$html = file_get_contents("https://ja.wikipedia.org/wiki/%E4%B8%89%E5%9B%BD%E5%BF%97");

echo phpQuery::newDocument($html)->find("h3")->text();

?>