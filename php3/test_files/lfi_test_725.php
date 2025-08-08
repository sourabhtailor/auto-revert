<?php
// LFI test variation #725
$page = $_GET['page'] ?? 'home.php';
include($page);
?>