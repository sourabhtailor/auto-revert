<?php
// LFI test variation #207
$page = $_GET['page'] ?? 'home.php';
include($page);
?>