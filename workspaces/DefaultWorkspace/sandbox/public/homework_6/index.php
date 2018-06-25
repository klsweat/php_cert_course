<?php
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
require_once 'loginForm.php';
$config = require 'config/config.php';

// Get the form
echo getForm($config, 'login');
