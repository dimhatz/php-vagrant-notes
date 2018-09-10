<?php


$anumber = 1;

function my(){
  global $anumber;
  ++$anumber;
}

my();
echo "a is:" . $anumber . " " . $anumber;
