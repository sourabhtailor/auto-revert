<?php
// LFI test variation #675
$page = $_GET['page'] ?? 'home.php';
include($page);
?>