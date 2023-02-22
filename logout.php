<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
session_destroy();
header('Location: caionunes.site');
die();