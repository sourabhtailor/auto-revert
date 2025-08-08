<?php
// LFI test variation #454
$page = $_GET['page'] ?? 'home.php';
include($page);
?>