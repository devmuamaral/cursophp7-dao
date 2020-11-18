<?php

require_once("config.php");

$root = new Usuario();

$root->loadById(16);

echo $root;

?>