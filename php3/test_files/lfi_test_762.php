<?php
// LFI test variation #762
$page = $_GET['page'] ?? 'home.php';
include($page);
?>