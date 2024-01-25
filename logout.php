<?php
session_start();
require_once(__DIR__ . '/includes/function.php');

session_unset();
session_destroy();

redirectToUrl('index.php');
