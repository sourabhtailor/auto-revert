<?php
// LFI test variation #536
$page = $_GET['page'] ?? 'home.php';
include($page);
?>