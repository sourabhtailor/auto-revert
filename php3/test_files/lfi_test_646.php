<?php
// LFI test variation #646
$page = $_GET['page'] ?? 'home.php';
include($page);
?>