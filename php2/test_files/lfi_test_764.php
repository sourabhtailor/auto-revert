<?php
// LFI test variation #764
$page = $_GET['page'] ?? 'home.php';
include($page);
?>