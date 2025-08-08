<?php
// LFI test variation #786
$page = $_GET['page'] ?? 'home.php';
include($page);
?>