<?php session_start();

/********************************
 * DATABASE & FUNCTIONS
 ********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
 * PROCESS
 ********************************/


/********************************
 * VIEW
 ********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';