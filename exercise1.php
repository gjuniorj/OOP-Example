<?php

require "classArrayObj.php";

// Exercise 1 - Draws an array with separator (between elements)

$newArray = new ArrayObj();

$newArray->createDynamically();
$newArray->draw('|','','');

?>