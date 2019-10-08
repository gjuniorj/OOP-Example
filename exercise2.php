<?php

require "classArrayObj.php";

// Exercise 2 - Draws an array with separator (between elements) and initial and final delimiters

$newArray = new ArrayObj();

$newArray->createDynamically();
$newArray->draw('-','[',']');