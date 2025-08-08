<?php
// LFI test variation #221
$page = $_GET['page'] ?? 'home.php';
include($page);
?>