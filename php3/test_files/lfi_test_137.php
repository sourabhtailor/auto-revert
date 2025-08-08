<?php
// LFI test variation #137
$page = $_GET['page'] ?? 'home.php';
include($page);
?>