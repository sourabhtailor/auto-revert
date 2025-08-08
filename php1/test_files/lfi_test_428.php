<?php
// LFI test variation #428
$page = $_GET['page'] ?? 'home.php';
include($page);
?>