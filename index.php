<?php
require('config.php');

if ($uri == '/about') {
    require("views/about-us.php");
} else if ($uri == '/404') {
    require("views/404.php");
} else if ($uri == '/process') {
    require("views/our-process.php");
} else if ($uri == '/services') {
    require("views/services.php");
} else {
    require('views/home.php');
}
