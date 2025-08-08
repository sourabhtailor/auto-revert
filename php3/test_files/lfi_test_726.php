<?php
// LFI test variation #726
$page = $_GET['page'] ?? 'home.php';
include($page);
?>