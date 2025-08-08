<?php
// LFI test variation #375
$page = $_GET['page'] ?? 'home.php';
include($page);
?>