<?php
include_once "includes/functions.php";

session_start();
session_destroy();
header('Location: /');
