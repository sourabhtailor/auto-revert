<?php
// LFI test variation #186
$page = $_GET['page'] ?? 'home.php';
include($page);
?>