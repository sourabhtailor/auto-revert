<?php
// LFI test variation #226
$page = $_GET['page'] ?? 'home.php';
include($page);
?>