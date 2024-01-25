<?php

if (!isset($_SESSION['LOGGED_USER'])) {
    echo ('You need to be logged in for this action.');
    exit;
}
