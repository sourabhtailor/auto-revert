<?php
// LFI test variation #383
$page = $_GET['page'] ?? 'home.php';
include($page);
?>