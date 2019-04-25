<?php
require('config.php');


if ($uri == '/about') {
    require("views/about-us.php");
} else {
require('views/home.php');
}
