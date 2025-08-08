<?php
// LFI test variation #452
$page = $_GET['page'] ?? 'home.php';
include($page);
?>