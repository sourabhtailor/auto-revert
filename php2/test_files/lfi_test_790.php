<?php
// LFI test variation #790
$page = $_GET['page'] ?? 'home.php';
include($page);
?>