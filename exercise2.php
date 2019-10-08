<?php

require "classArrayObj.php";

// Exercise 2 - Draws an array with separator (between elements) and initial and final delimiters

$arrayHandler = new ArrayObj();

$arrayHandler->createArrayDynamically();
$arrayHandler->drawArray('-','[',']');