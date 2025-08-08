<?php
// LFI test variation #974
$page = $_GET['page'] ?? 'home.php';
include($page);
?>