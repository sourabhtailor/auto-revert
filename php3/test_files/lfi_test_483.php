<?php
// LFI test variation #483
$page = $_GET['page'] ?? 'home.php';
include($page);
?>