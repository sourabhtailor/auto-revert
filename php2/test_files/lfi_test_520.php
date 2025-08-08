<?php
// LFI test variation #520
$page = $_GET['page'] ?? 'home.php';
include($page);
?>