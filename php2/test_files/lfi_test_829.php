<?php
// LFI test variation #829
$page = $_GET['page'] ?? 'home.php';
include($page);
?>