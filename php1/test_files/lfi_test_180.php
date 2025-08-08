<?php
// LFI test variation #180
$page = $_GET['page'] ?? 'home.php';
include($page);
?>