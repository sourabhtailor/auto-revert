<?php
// LFI test variation #325
$page = $_GET['page'] ?? 'home.php';
include($page);
?>