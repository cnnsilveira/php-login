<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
session_destroy();
header('Location: '.$_SEVER['DOCUMENT_ROOT']);
die();