<?php
// LFI test variation #879
$page = $_GET['page'] ?? 'home.php';
include($page);
?>