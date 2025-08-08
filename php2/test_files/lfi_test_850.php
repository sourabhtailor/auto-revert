<?php
// LFI test variation #850
$page = $_GET['page'] ?? 'home.php';
include($page);
?>