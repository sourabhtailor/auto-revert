<?php
// LFI test variation #246
$page = $_GET['page'] ?? 'home.php';
include($page);
?>