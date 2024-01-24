<?php
session_start();
require_once(__DIR__ . '/includes/variable.php');
require_once(__DIR__ . '/includes/function.php');

disconect();

redirectToUrl('index.php');
