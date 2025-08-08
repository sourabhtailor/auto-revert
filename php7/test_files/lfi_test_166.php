<?php
// LFI test variation #166
$page = $_GET['page'] ?? 'home.php';
include($page);
?>