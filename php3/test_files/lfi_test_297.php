<?php
// LFI test variation #297
$page = $_GET['page'] ?? 'home.php';
include($page);
?>