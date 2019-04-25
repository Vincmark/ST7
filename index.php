<?php
require('config.php');

echo $uri;
if ($uri == '/about') {
    require("views/about-us.php");
} else {
    require('views/home.php');
}
