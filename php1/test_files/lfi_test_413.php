<?php
// LFI test variation #413
$page = $_GET['page'] ?? 'home.php';
include($page);
?>