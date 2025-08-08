<?php
// LFI test variation #563
$page = $_GET['page'] ?? 'home.php';
include($page);
?>